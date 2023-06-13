<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\{RegisterController,AdminController};

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

    Route::get('/form',[RegisterController::class,'index'])->name('form');
    Route::post('/register',[RegisterController::class,'store']);
    Route::post('/login',[RegisterController::class,'authenticate']);
    Route::get('/logout',[RegisterController::class,'logout'])->name('logout');


    Route::get('home',[HomeController::class,'home'])->name('home');
    Route::get('products',[HomeController::class,'index'])->name('products');

Route::get('/backend',[HomeController::class,'adminPannel'])->name('backend');
Route::get('/adminlogin',[AdminController::class,'login'])->name('admin.login');
