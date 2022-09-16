<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactUsFormController;




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

Route::get('/test1', function () {
    return "Hello test1";
});

Route::get('/test2', function () {
    return "Hello test2";
});

Route::get('/test3', function () {
    return "Hello test3";
});

Route::get('/test4', [TestController::class,'index']);


Route::get('/test5', function () {
    return view('test5');
});

Route::get('/test6', [TestController::class,'list']);

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/category', CategoryController::class);

Route::get('/phone',[PhoneController::class,'index'])->name('phone.index');
Route::get('/phone/create',[PhoneController::class,'create'])->name('phone.create');
Route::post('/phone',[PhoneController::class,'store'])->name('phone.store');
Route::get('/phone/{phone}',[PhoneController::class,'show'])->name('phone.show');
Route::delete('/phone/{phone}',[PhoneController::class,'destroy'])->name('phone.destroy');
Route::get('/phone/{phone}/edit',[PhoneController::class,'edit'])->name('phone.edit');
Route::put('/phone/{phone}',[PhoneController::class,'update'])->name('phone.update');
Route::get('/phone/{phone}/detail',[PhoneController::class,'show'])->name('phone.detail');



// login and register
Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('/admin/post-login', [AdminController::class, 'postLogin'])->name('admin.login.post');
Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/show/{phone}',[FrontendController::class,'show']);
Route::get('/list',[FrontendController::class,'list']);
Route::get('/frontend/search/', [FrontendController::class,'getBySearch']);

// contacts us 
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
