<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Company;
use App\Models\Reviews;
use App\Models\Otp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 
use Session;
use Illuminate\Support\Facades\Storage;
use Str;

class UserAuthController extends Controller
{
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'fname' => 'required|string|max:255', // Assuming `fname` should be a string
            'lname' => 'required|string|max:255', // Assuming `lname` should be a string
            'password' => 'required|string|min:8', // Password should be a string and have a minimum length
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already subscribed.',
            'fname.required' => 'The first name field is required.',
            'fname.string' => 'The first name must be a string.',
            'lname.required' => 'The last name field is required.',
            'lname.string' => 'The last name must be a string.',
            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters long.',
        ]);
        
        // If validation fails, return a JSON response
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // If validation passes, create the subscriber
        $Subscriber = User::create([
            'name' => $request->fname.' '.$request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Return success response
        return response()->json([
            'status' => 'success',
            'message' => 'You have successfully registered.'
        ], 200);
        
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least 8 characters long.',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Retrieve the user by email
        $user = User::where('email', $request->input('email'))->first();
        session()->put('userData', $user);

        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Attempt to log in the user
            Auth::login($user);

            // Authentication was successful
            return response()->json(['status' => 'success', 'message' => 'Login successful']);
        } else {
            // Authentication failed
            return response()->json(['status' => 'error', 'message' => 'Invalid email or password'], 401);
        }
    }

    public function sendOtp(Request $request)
    {
        // Step 1: Validate the email input
        $request->validate([
            'email' => 'required|email',
        ]);
    
        // Step 2: Check if the email exists in the users table
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return response()->json(['message' => 'Email not found in our records'], 404);
        }
    
        // Step 3: Generate OTP and store it in the database with a 10-minute expiration
        $otp = Otp::create([
            'otp' => rand(100000, 999999), 
            'email' => $request->email,
            'expires_at' => Carbon::now()->addMinutes(10), 
        ]);

        $otp_verify = Otp::where('email', $request->email)->first();
    
        // Step 4: Send the OTP via email
        Mail::to($request->email)->send(new OtpMail($otp_verify->otp));
    
        return response()->json(['message' => 'OTP sent successfully.', 'email_id'=>$user->email]);
    }

    public function verifyOtp(Request $request)
    {
        // Validate the OTP and email input
        $request->validate([
            'email1' => 'required|email',
            'otp' => 'required',
        ]);
    
        // Retrieve the OTP entry based on the email and OTP provided
        $otp = Otp::where('email', $request->email1)
            ->where('otp', $request->otp)
            ->first();

        session(['otp_email' => $otp->email]);
    
        // Check if OTP exists
        if (!$otp) {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }
    
        // Check if the OTP is expired or already used
        if (Carbon::now()->greaterThan($otp->expires_at)) {
            // OTP expired, delete the OTP record
            $otp->delete();
            return response()->json(['message' => 'OTP has expired'], 400);
        }
    
        if ($otp->is_used) {
            return response()->json(['message' => 'OTP already used'], 400);
        }
    
        // OTP is valid, mark as used
        $otp->update(['is_used' => true]);
    
        // Return success response
        return response()->json(['message' => 'OTP verified successfully']);
    }

    public function resetPassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'new_pass' => 'required|min:8',
            'confirm_pass' => 'required|min:8', 
 
        ]);

        if($request->new_pass == $request->confirm_pass) {

            $otpEmail = session('otp_email'); 
            $user = User::where('email', $otpEmail)->first();

            $user->update([
                'password' => Hash::make($request->new_pass),
            ]);

            return response()->json(['status' => 'success', 'message' => 'Password reset successfully']);

        } else {
            return response()->json(['status' => 'fail', 'message' => "Password doesn't matched"]);
        }
    }


    public function userDashboard(Request $request)
    {
        if (session()->has('userData')) {
            $user = session()->get('userData');
            return view('user.dashboard', ['userData' => $user]); 
        } else {
            return redirect()->route('signin');
        }
    }

    public function profile(Request $request)
    {
        if (session()->has('userData')) {
            $user = session()->get('userData');
            return view('user.profile', ['userData' => $user]); 
        } else {
            return redirect()->route('signin');
        }        
    }

    public function updateData(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'example-profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'example-about' => 'nullable|string|max:255',
            'example-name' => 'nullable|string|max:255',
            'example-phone' => [
                'nullable',
                'string',
                'max:20', // Adjust length as needed
                'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/', // Adjust regex as needed
            ],
            'example-website' => 'nullable|string|max:50',
        ], [
            'example-about.string' => 'About field is required in correct format.',
            'example-about.max' => 'About field only has 255 characters.',
            'example-name.string' => 'Name field is required in correct format.',
            'example-name.max' => 'Name field only has 255 characters.',
            'example-website.string' => 'Website field is required in correct format.',
            'example-website.max' => 'Website field only has 200 characters.',
            'example-phone' => 'Please enter correct phone number.',
            'example-profile' => 'Please upload correct image.',
        ]);

        // If validation fails, return a JSON response
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = auth()->user();

        if ($request->hasFile('example-profile')) {
            // Check if the user already has an image and delete it
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }
        
            // Handle the new image upload
            $image = $request->file('example-profile');
            $imageName = 'user_' . time() . '.' . $image->getClientOriginalExtension();
        
            // Move the file to the correct directory
            $image->move(public_path('assets/userpanel/assets/images/users/'), $imageName);
        
            // Store only the relative path in the database
            $user->image = 'assets/userpanel/assets/images/users/' . $imageName;
        }
        
        $user->name = $request->input('example-name');
        $user->email = $request->input('example-email');
        $user->phone = $request->input('example-phone');
        $user->website = $request->input('example-website');
        $user->about = $request->input('example-about');
        $user->save();

        $newUserData = User::where('email', $user->email)->first();
        session()->put('userData', $newUserData);

        return response()->json([
            'message' => 'Profile updated successfully!',
            'status' => 'success'
        ]);
    }

    public function changePassword(Request $request)
    {
        $user = session()->get('userData');
        return view('user.changePassword', ['userData' => $user]);
    }

    public function updatePassword(Request $request)
    {

        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'recent_password' => 'required',
            'new_password' => 'required|min:8', 
            'confirm_password' => 'required|min:8', 
        ], [
            'recent_password.required' => 'Recent Password is required.',
            'new_password.required' => 'New Password is required.',
            'new_password.min' => 'Minimum 8 characters.',
            'confirm_password.required' => 'Confirm Password is required.',
            'confirm_password.min' => 'Minimum 8 characters.',
        ]);

        // If validation fails, return a JSON response
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Get the authenticated user
        $user = Auth::user();

        // Check if the recent password is correct
        if (!Hash::check($request->input('recent_password'), $user->password)) {
            return response()->json(['error' => 'The recent password is incorrect.', 'status' => 400]);
        }

        // Update the password
        if($request->new_password == $request->confirm_password) {
            $user->password = Hash::make($request->input('new_password'));
            $user->save();
            return response()->json(['message' => 'Password updated successfully!', 'status' => 'success']);
        } else {
            return response()->json(['error' => "Password doesn't matched.", 'status' => 400]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin')->with('message', 'Logged out successfully');
    }

    public function userReview(Request $request)
    {
        $user_reviews = Reviews::where('user_id', session('userData')->id)->get();
        $category = Category::get();
        $company = Company::get();
        return view('user.reviews', compact('company', 'category', 'user_reviews'));
    }

    public function editReview(Request $request)
    {
        // Find the review by ID
        $review = Reviews::find($request->id);
        $company_data = Company::where('category_id', $review->category_id)->get();
        
        if ($review) {
            return response()->json([
                'message' => 'Record fetch successfully',
                'status' => 201,
                'reviewData' => $review,
                'company_data' => $company_data
            ]);
        } else {
            return response()->json([
                'message' => 'Review not found',
                'status' => 404,
            ]);
        }
    }

    public function deleteReview(Request $request, $id)
    {
        // Find the review by ID
        $review = Reviews::find($id);
    
        if ($review) {
            // Delete the review
            $review->delete();
            return response()->json([
                'message' => 'Review deleted successfully',
                'status' => 201,
                'id' => $id,
            ]);
        } else {
            return response()->json([
                'message' => 'Review not found',
                'status' => 404,
            ]);
        }
    }
    

    
    public function getCompanies(Request $request)
    {
        $companies = Company::where('category_id', $request->category_id)->get();
        return response()->json($companies);
    }

    public function addReview(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'company' => 'required',
            'review' => 'required|min:20|max:200',
            'stars' => 'required|numeric',
            'user_id' => 'required'
        ], [
            'category.required' => 'Please select category.',
            'company.required' => 'Please select company.',
            'review.required' => 'Review is required.',
            'review.min' => 'Atleast 20 characters.',
            'review.max' => 'Maximum 200 characters.',
            'stars.required' => 'Give stars.',
            'stars.numeric' => 'Only numeric field insert.',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Retrieve the user by email
        Reviews::create([
            'user_id'     => $request->user_id,
            'category_id' => $request->category,
            'company_id'  => $request->company,
            'description' => $request->review,
            'total_star'  => $request->stars,  // Store the stars rating
        ]);
    
        return response()->json(['message' => 'Review Added Successfully!', 'status' => 'success']);
    }

    public function listCompany(Request $request) 
    {
        if (session()->has('userData')) {
            $user = session()->get('userData');
            $company = Company::where('user_id', session('userData')->id)->get();
            return view('user.companies', ['userData' => $user, 'company' => $company]); 
        } else {
            return redirect()->route('signin');
        }        
    }

    public function addCompany(Request $request) 
    {
        if (session()->has('userData')) {
            $category = Category::get();
            return view('user.addCompany', ['category' => $category]); 
        } else {
            return redirect()->route('signin');
        }        
    }

    public function insertCompany(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|string|max:255',
            'company_name' => 'required|max:255',
            'category_id' => 'required',
            'website' => 'required',
            'description' => 'required|string|min:100',
            'feature_1' => 'max:50',
            'feature_2' => 'max:50',
            'feature_3' => 'max:50',
            'feature_4' => 'max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ], [
            'user_id.required' => 'The user ID is required.',
            'user_id.string' => 'The user ID must be a string.',
            'user_id.max' => 'The user ID may not be greater than :max characters.',
            'company_name.required' => 'The company name is required.',
            'company_name.max' => 'The company name may not be greater than :max characters.',
            'category_id.required' => 'The category is required.',
            'description.required' => 'The description is required.',
            'description.string' => 'The description must be a string.',
            'description.min' => 'The description must be at least :min characters.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: :values.',
            'image.max' => 'The image may not be greater than :max kilobytes.',    
            'logo_image.image' => 'The file must be an image.',
            'logo_image.mimes' => 'The image must be a file of type: :values.',
            'logo_image.max' => 'The image may not be greater than :max kilobytes.',       
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

            // Handle image upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = 'company_'.time() . '.' . $file->getClientOriginalExtension(); 

                $destinationPath = public_path('assets/images/company'); 
                
                $file->move($destinationPath, $filename);
                
                $path = 'assets/images/company/' . $filename;
            } 

            // Handle logo upload
            if ($request->hasFile('logo_image')) {
                $file_logo = $request->file('logo_image');
                $filename_logo = 'logo_image_'.time() . '.' . $file_logo->getClientOriginalExtension(); 
                $destinationPath_logo = public_path('assets/images/company'); 
                
                $file_logo->move($destinationPath_logo, $filename_logo);
                
                $path_logo = 'assets/images/company/' . $filename_logo;
            }

    
        $companySlug1 = Str::slug($request->input('company_name'));

        // Store company in the database
        $company = new Company();
        $company->user_id = $request->input('user_id');
        $company->company_name = $request->input('company_name');
        $company->company_sub_title = $request->input('subtitle');
        $company->category_id = $request->input('category_id');
        $company->category_slug = $request->input('category_id');
        $company->company_slug = $companySlug1;
        $company->description = $request->input('description');
        $company->benefit = $request->input('benefit');
        $company->terms = $request->input('terms');
        $company->pros = $request->input('pros');
        $company->cons = $request->input('cons');
        $company->blank_1 = $request->input('feature_1');
        $company->blank_2 = $request->input('feature_2');
        $company->blank_3 = $request->input('feature_3');
        $company->blank_4 = $request->input('feature_4');
        $company->website = $request->input('website');
        if (isset($path)) {
            $company->image = $path;
        }   
        if (isset($path_logo)) {
            $company->image_logo = $path_logo;
        }     
        $company->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Company added successfully!',
        ]);
    }

    public function deleteCompany(Request $request, $id)
    {
        // Find the review by ID
        $company = Company::find($id);
    
        if ($company) {
            if ($company->image) {
                $imagePath = public_path($company->image);
                
                if (file_exists($imagePath)) {
                    unlink($imagePath); 
                }
            }

            if ($company->image_logo) {
                $imagePath_logo = public_path($company->image_logo);
                
                if (file_exists($imagePath_logo)) {
                    unlink($imagePath_logo); 
                }
            }
    
            // Delete the review
            $company->delete();
            return response()->json([
                'message' => 'Company deleted successfully',
                'status' => 201,
                'id' => $id,
            ]);
        } else {
            return response()->json([
                'message' => 'Company not found',
                'status' => 404,
            ]);
        }
    }

    public function editCompany($id)
    {
        $edit_company = Company::where('id' , $id)->first();
        $category = Category::get();
        return view('user.editCompany', ['edit_company'=>$edit_company, 'category'=>$category]);
    }

    public function updateCompany(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|string|max:255',
            'company_name' => 'required|max:255',
            'category_id' => 'required',
            'website' => 'required',
            'description' => 'required|string|min:100',
            'feature_1' => 'max:50',
            'feature_2' => 'max:50',
            'feature_3' => 'max:50',
            'feature_4' => 'max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
        ], [
            'user_id.required' => 'The user ID is required.',
            'company_name.required' => 'The company name is required.',
            'category_id.required' => 'The category is required.',
            'description.required' => 'The description is required.',
            'description.min' => 'The description must be at least :min characters.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: :values.',
            'image.max' => 'The image may not be greater than :max kilobytes.',    
            'logo_image.image' => 'The file must be an image.',
            'logo_image.mimes' => 'The image must be a file of type: :values.',
            'logo_image.max' => 'The image may not be greater than :max kilobytes.',       
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
    
        // Find the existing company by ID
        $company = Company::find($request->company_id);
    
        if (!$company) {
            return response()->json([
                'status' => 'error',
                'message' => 'Company not found!',
            ], 404);
        }
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'company_'.time() . '.' . $file->getClientOriginalExtension(); 
            $destinationPath = public_path('assets/images/company'); 
            $file->move($destinationPath, $filename);
            $path = 'assets/images/company/' . $filename;
            $company->image = $path;
        }
    
        // Handle logo upload
        if ($request->hasFile('logo_image')) {
            $file_logo = $request->file('logo_image');
            $filename_logo = 'logo_image_'.time() . '.' . $file_logo->getClientOriginalExtension(); 
            $destinationPath_logo = public_path('assets/images/company'); 
            $file_logo->move($destinationPath_logo, $filename_logo);
            $path_logo = 'assets/images/company/' . $filename_logo;
            $company->image_logo = $path_logo;
        }
    
        // Update the company fields
        $company->user_id = $request->input('user_id');
        $company->company_name = $request->input('company_name');
        
        $company->company_slug = Str::slug($request->input('company_name'));
    
        $company->company_sub_title = $request->input('subtitle');
        $company->category_id = $request->input('category_id');
        $company->category_slug = $request->input('category_id');
        $company->description = $request->input('description');
        $company->benefit = $request->input('benefit');
        $company->terms = $request->input('terms');
        $company->pros = $request->input('pros');
        $company->cons = $request->input('cons');
        $company->blank_1 = $request->input('feature_1');
        $company->blank_2 = $request->input('feature_2');
        $company->blank_3 = $request->input('feature_3');
        $company->blank_4 = $request->input('feature_4');
        $company->website = $request->input('website');
    
        // Save the updated company data
        $company->save();
    
        return response()->json([
            'status' => 'success',
            'message' => 'Company updated successfully!',
        ]);
    }
    

}
