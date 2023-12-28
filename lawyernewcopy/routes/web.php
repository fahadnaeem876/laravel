<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Customercontroller;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LawyerAboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckRoleController;




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

Route::get('/', [HomeController::class, 'index']);
Route::view('/about', [HomeController::class, 'about'])->name('about');
Route::view('/contact', [HomeController::class, 'contact'])->name('contact');
Route::view('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/selectrole', [CheckRoleController::class, 'selectrole'])->name('selectrole'); 





Route::middleware('auth')->group(function () {

Route::middleware(['auth', 'checkType:1'])->group(function () {
Route::get('/admin', [AdminController::class, 'admin']); // redirct to admin index page
});


Route::middleware(['auth', 'checkType:2'])->group(function () {
Route::get('/lawyer', [LawyerController::class, 'lawyer']); // redirct to Lawyer index page

Route::get('/home', [LawyerAboutController::class, 'home']); 
Route::get('/lawyer_about', [LawyerAboutController::class, 'lawyer_about'])->name('lawyer_about');
Route::get('/lawyer_details', [LawyerAboutController::class, 'lawyer_details'])->name('lawyer_details');
Route::get('/lawyer_service', [LawyerAboutController::class, 'lawyer_service'])->name('lawyer_service');
Route::get('/lawyer_team', [LawyerAboutController::class, 'lawyer_team'])->name('lawyer_team');
Route::post('/update-profile', [LawyerAboutController::class, 'update'])->name('update-profile');
});


Route::middleware(['auth', 'checkType:0'])->group(function () {
Route::get('/customer', [Customercontroller::class, 'customer']);  // redirct to customer index page

Route::get('/user_home', [UserController::class, 'user_home'])->name('user_home');
Route::get('/user_about', [UserController::class, 'user_about'])->name('user_about');
Route::get('/user_service', [UserController::class, 'user_service'])->name('user_service');
Route::get('/user_bloglist', [UserController::class, 'user_bloglist'])->name('user_bloglist');
Route::get('/user_bloglist2', [UserController::class, 'user_bloglist2'])->name('user_bloglist2');
Route::get('/user_blogdetail', [UserController::class, 'user_blogdetail'])->name('user_blogdetail');
Route::get('/user_practiceareas', [UserController::class, 'user_practiceareas'])->name('user_practiceareas');
Route::get('/user_practiceareadetail', [UserController::class, 'user_practiceareadetail'])->name('user_practiceareadetail');
Route::get('/user_attorneylist', [UserController::class, 'user_attorneylist'])->name('user_attorneylist');
Route::get('/user_attorney/{id}', [UserController::class, 'user_attorney'])->name('user_attorney');
Route::get('/user_gallery', [UserController::class, 'user_gallery'])->name('user_gallery');
Route::get('/user_gallery2', [UserController::class, 'user_gallery2'])->name('user_gallery2');
Route::get('/user_gallery3', [UserController::class, 'user_gallery3'])->name('user_gallery3');
Route::get('/user_faq', [UserController::class, 'user_faq'])->name('user_faq');
Route::get('/user_testimonials', [UserController::class, 'user_testimonials'])->name('user_testimonials');
Route::get('/user_404', [UserController::class, 'user_404'])->name('user_404');
Route::get('/user_contactus', [UserController::class, 'user_contactus'])->name('user_contactus');
});




});



