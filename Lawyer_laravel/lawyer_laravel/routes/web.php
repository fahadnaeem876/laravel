<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.customer_home');
});
Route::get('/no-access', [homecontroller::class,'loginform']);
Route::get('/all_lawyer', [homecontroller::class,'all_lawyer']);
Route::get('/book_appoint', [homecontroller::class,'book_appoint']); 
Route::get('/my_profile', [homecontroller::class,'my_profile']); 
  


Route::get('/login', function () {
    return view('admin.admin_login');
});
