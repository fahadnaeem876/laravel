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
    session()->put('user_id',1);
    return view('welcome');
});
Route::get('/logout', function () {
    session()->forget('user_id',1);
    return view('welcome');
});

Route::get('/mypage',[homecontroller::class,'mypage'])->Middleware('guard');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
