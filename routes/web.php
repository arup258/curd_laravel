<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\seller\SellerController;
use App\Http\Controllers\crud\CrudController;

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


Route::prefix('admin')->group(function(){

    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');   
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin')->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->middleware('admin')->name('admin.logout');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'register_create'])->name('admin.register.create');
    Route::post('/login/create', [AdminController::class, 'login_create'])->name('admin.login.create');
    
});

Route::prefix('seller')->group(function(){

    Route::get('/login', [SellerController::class, 'seller_login'])->name('seller.login');
    Route::post('/login/create', [SellerController::class, 'seller_login_create'])->name('seller.login.create');

    Route::get('/register', [SellerController::class, 'seller_register'])->name('seller.register');
    Route::post('/register/create', [SellerController::class, 'seller_register_create'])->name('seller.register.create');

    Route::get('/dashboard', [SellerController::class, 'seller_dashboard'])->middleware('seller')->name('seller.dashboard');
    Route::get('/seller/logout', [SellerController::class, 'seller_logout'])->name('seller.logout');
});

Route::prefix('student')->group(function(){
    Route::get('/register', [CrudController::class, 'student_register'])->name('student.register');
    Route::post('/register/create', [CrudController::class, 'student_register_create'])->name('student.register.create');


    Route::get('/dashboard', [CrudController::class, 'student_dashboard'])->name('student.dashboard');
});
