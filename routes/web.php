<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [HomeController::class,'index']);
Route::get('/admin', [AdminController::class,'index']);

// Route::prefix('admin')->group(function(){
//     Route::get('/login', [AdminLoginController::class,'showLoginForm'])->name('admin.login');
//     Route::post('/login', [AdminLoginController::class,'login'])->name('admin.login.submit');
//     Route::get('/', [AdminController::class,'index'])->name('admin.dashboard');
//     Route::get('/category', [FrontendController::class,'index']);
//   });
 Route::resource('/category','CategoryController');
 Route::resource('/product','ProductController');

// Route::get('/frontend', [FrontendController::class, 'index']);