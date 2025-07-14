<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Start
Route::get('/hello', function() {
    return 1;
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/review', [HomeController::class, 'review'])->name('review');
Route::get('/review-list/{slug}', [HomeController::class, 'reviewList'])->name('reviewList');
Route::get('/review-details/{slug}/{slug2}', [HomeController::class, 'reviewDetails'])->name('reviewDetails');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blogDetails');
Route::get('/comparison', [HomeController::class, 'comparison'])->name('comparison');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/category', [HomeController::class, 'service'])->name('service');    //Category
Route::get('/category-details/{slug}', [HomeController::class, 'serviceDetails'])->name('serviceDetails'); //Category Details

// Routes restricted to guests (only accessible when not logged in)
// Route::middleware(['guest.only'])->group(function () {
    Route::get('/signin', [HomeController::class, 'signin'])->name('signin');
    Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
// });

Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
Route::get('/send-newletter', [HomeController::class, 'sendNewletter'])->name('sendNewletter');

// Frontend End

// User Panel Start

Route::post('/user-registration', [UserAuthController::class, 'registration'])->name('registration');
Route::post('/user-login', [UserAuthController::class, 'login'])->name('login');
Route::post('/send-otp', [UserAuthController::class, 'sendOtp'])->name('sendOtp');
Route::post('/verify-otp', [UserAuthController::class, 'verifyOtp'])->name('verifyOtp');
Route::post('/reset-password', [UserAuthController::class, 'resetPassword'])->name('resetPassword');

Route::prefix('user')->middleware('auth.custom')->group(function () {
    Route::match(['get', 'post'], '/dashboard', [UserAuthController::class, 'userDashboard'])->name('userDashboard');

    Route::match(['get', 'post'], '/review', [UserAuthController::class, 'userReview'])->name('userReview');
    Route::match(['get', 'post'], '/get-companies', [UserAuthController::class, 'getCompanies'])->name('get.companies');
    Route::match(['get', 'post'], '/add-review', [UserAuthController::class, 'addReview'])->name('addReview');
    Route::get('/edit-review', [UserAuthController::class, 'editReview'])->name('editReview');
    Route::match(['get', 'post'], '/update-review', [UserAuthController::class, 'updateReview'])->name('updateReview');
    Route::delete('/delete-review/{id}', [UserAuthController::class, 'deleteReview'])->name('deleteReview');

    Route::match(['get', 'post'], '/listed-companies', [UserAuthController::class, 'listCompany'])->name('listCompany');
    Route::match(['get', 'post'], '/add-company', [UserAuthController::class, 'addCompany'])->name('addCompany');
    Route::post('/insert-company', [UserAuthController::class, 'insertCompany'])->name('insertCompany');
    Route::get('/edit-company/{id}', [UserAuthController::class, 'editCompany'])->name('editCompany');
    Route::match(['get', 'post'], '/update-company', [UserAuthController::class, 'updateCompany'])->name('updateCompany');
    Route::delete('/delete-company/{id}', [UserAuthController::class, 'deleteCompany'])->name('deleteCompany');

    Route::match(['get', 'post'], '/profile', [UserAuthController::class, 'profile'])->name('profile');
    Route::match(['get', 'post'], '/profile/update', [UserAuthController::class, 'updateData'])->name('updateData');
    Route::match(['get', 'post'], '/change-password', [UserAuthController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'post'], '/update-password', [UserAuthController::class, 'updatePassword'])->name('updatePassword');
    Route::match(['get', 'post'], '/logout', [UserAuthController::class, 'logout'])->name('logout');

    // Fallback route: Redirect any undefined URL under /user to /dashboard
    Route::fallback(function() {
        return redirect()->route('userDashboard');
    });
    
});

// User Panel End
