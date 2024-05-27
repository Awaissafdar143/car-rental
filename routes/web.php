<?php

use App\Http\Controllers\EmailmarkeingController;
use App\Http\Controllers\admincarcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\googleController;
use App\Http\Controllers\mainhomecontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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


// Auth::routes();

Route::middleware('auth')->group(function () {
    Route::controller(mainhomecontroller::class)->group(function () {
        Route::get('/account-dashboard', 'dashboard')->name('user.dashboard');
        Route::get('/profile', 'singleuser_dashboard')->name('profile');
        Route::Post('/profile/{id}', 'singleuser_dashboard_update')->name('profile_update');
        Route::get('/account-favorite', 'account_favorite')->name('account-favorite');
        Route::get('/route', 'route')->name('route');
    });

});

Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
    Route::controller(AdminController::class)->group(function () {
        Route::get('/Admin-panel', 'blog_show')->name('admin.blogdashboard');
        Route::get('/Add-blog', 'add_blog_show')->name('add_blog_admin');
        Route::Post('/Add', 'blog_add')->name('admin.addblog');
        Route::get('deleted/{id}', 'blog_delete')->name('admin.delete');
        Route::get('update/{id}', 'blog_update')->name('admin.update');
        Route::POST('update', 'blog_update_post')->name('blog.update');
    });
    //car dashboard
    Route::controller(admincarcontroller::class)->group(function () {
        Route::get('/car-admin-panel', 'all_car_show')->name('admin.cardashboard');
        Route::get('/Add-car', 'addcar_show')->name('admin.select');
        Route::Post('/Addcar', 'add_car')->name('admin.addcar');
        Route::get('delete-car/{id}', 'car_delete')->name('admin.cardelete');
        Route::get('carupdate/{id}', 'car_update')->name('admincar.update');
        Route::POST('/car-update', 'car_update_post')->name('car_update_post');
    });



    Route::controller(EmailmarkeingController::class)->group(function () {
        Route::get('/emailmarketing_dashboard', 'dashboard')->name('admin.emailmarketing');
        Route::get('/Add-template', 'add_template_show')->name('add_template_admin');
        Route::Post('/Add', 'template_add')->name('admin.addtemplate');
        Route::get('deleted/{id}', 'template_delete')->name('template.delete');
        Route::get('update/{id}', 'template_update')->name('template.update');
        Route::POST('update', 'template_update_post')->name('template.update_post');
        Route::get('/add_email', 'add_email')->name('add_email');
        Route::POST('/add_email_post', 'add_email_post')->name('add_email_post');
        Route::get('/all_email', 'all_email')->name('all_email');
        Route::get('/send_now/{id}', 'send_now')->name('send_email');
        Route::get('/email_delete', 'email_delete')->name('email_delete_permanent');
    });
});

Route::controller(mainhomecontroller::class)->group(function () {
    Route::get('/', 'car_show_home')->name('home');
    Route::get('/car', 'car_show')->name('car');
    Route::get('/car/{id}', 'single_car_show')->name('singlecar');
    Route::get('/blog', 'blog_show')->name('blog');
    Route::get('/blog/{slug}', 'blog_single')->name('blog-single');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/about', 'about')->name('about');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/gallery', 'gallery')->name('gallery');

});
Route::fallback(function () {
    return view('404');
});







// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');
// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');




// login with google
Route::get('auth/google', [googleController::class, 'loginWithGoogle'])->name('loginwithgoogle');

Route::any('/auth/google/callback', [googleController::class, 'callbackFromGoogle'])->name('callback');


//contact us page

Route::get('contact-us', [ContactController::class, 'index'])->name('contactus');
Route::get('contactUsform', [ContactController::class, 'contactUsform'])->name('admin.contactUsform');
