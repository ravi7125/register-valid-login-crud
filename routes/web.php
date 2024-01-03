<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('signup',[UserController::class,'index'])->name('signup.signup');
Route::view('signup','signup');
Route::view('login','login');
// Route::view('card','card');
Route::view('add','add');
Route::view('index','index');


// Route::view('welcomepage','welcomepage');
Route::get('welcomepage',[UserController::class,'show']);
Route::get('patten',[UserController::class,'patten']);

Route::get('search',[UserController::class,'search'])->name('search');
Route::get('edit/{id}',[UserController::class,'edit'])->name('edit');
// Route::get('edit/{id}',[UserController::class,'edit'])->name('edit');
Route::post('update/{id}',[UserController::class,'update'])->name('update');
Route::post('signup',[UserController::class,'store']);
Route::post('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');
Route::get('delete/{id}',[UserController::class,'destroy'])->name('delete');
Route::get('googlelogin',[UserController::class,'googlelogin'])->name('googlelogin');


Route::post('add',[ProductController::class,'product']);
Route::get('card',[ProductController::class,'getproduct']);


