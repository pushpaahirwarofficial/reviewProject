<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Category;
use App\Models\Reviews;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;
use App\Events\PostCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\SubscriberMail;
use Illuminate\Support\Facades\Mail;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index'); 
    }

    public function review()
    {
        $company_list = Company::all();
        return view('frontend.review', ['company_list' => $company_list]); 
    }

    public function reviewDetails($slug, $slug2)
    {
        $company_single = Company::where('company_slug', $slug2)->first(); 
        Session(['company_one' => $company_single]);      
        $all_reviews = Reviews::where('company_id', $company_single->id)->get();
        return view('frontend.review_details', ['company_single'=>$company_single, 'all_reviews'=>$all_reviews]); 
    }

    public function reviewList($slug)
    {
        $company_slug = Category::where('category_slug', $slug)->first();        
        $company = Company::where('category_id', $company_slug->id)->get();
        return view('frontend.review_list', ['company' => $company]); 
    }

    public function aboutUs()
    {
        return view('frontend.about_us'); 
    }

    public function blog()
    {
        return view('frontend.blog'); 
    }

    public function blogDetails()
    {
        return view('frontend.blog_details'); 
    }

    public function comparison()
    {
        return view('frontend.comparison'); 
    }

    public function contactUs()
    {
        return view('frontend.contact_us'); 
    }

    public function faq()
    {
        return view('frontend.faq'); 
    }

    public function service()
    {
        $category = Category::all();
        return view('frontend.service', ['category'=>$category]); 
    }

    public function serviceDetails($slug)
    {
        $category = Category::where('category_slug', $slug)->firstOrFail();
        Session(['category' => $category]);
        return view('frontend.service_details', ['category' => $category]); 
    }

    public function signin()
    {
        return view('frontend.signin'); 
    }

    public function signup()
    {
        return view('frontend.signup'); 
    }

    public function subscribe(Request $request)
    {
        // Custom validation logic
        $validator = Validator::make($request->all(), [
            'sMail' => 'required|email|unique:subscribe,email',
        ], [
            'sMail.required' => 'The email field is required.',
            'sMail.email' => 'Please provide a valid email address.',
            'sMail.unique' => 'This email is already subscribed.',
        ]);

        // If validation fails, return a JSON response
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // If validation passes, create the subscriber
        $Subscriber = Subscriber::create([
            'email' => $request->sMail,
            'password' => bcrypt($request->sMail),
        ]);

        // Return success response
        return response()->json([
            'status' => 'success',
            'message' => 'You have successfully subscribed.'
        ], 200);
    }


    function sendNewletter(Request $request) 
    {
        $subject = "Subscription Mail";
        $message = "new blog is added";

        event(new PostCreated($subject, $message));
        return 1; die;
        // $subscribers = Subscriber::get();
        // foreach($subscribers as $row) {
        //     \Mail::to($row->email)->send(new SubscriberMail($subject,$message));
        // }
        return redirect()->back()->withSuccess('Post Created');
    }



}
