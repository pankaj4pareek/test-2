<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RazorpayController;
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

Route::resource('/',frontController::class);
Route::get('razorpay-payment', [RazorpayController::class, 'index'])->name('razorpay-payment');
Route::post('razorpay-payment', [RazorpayController::class, 'store'])->name('razorpay.payment.store');
Route::group(['prefix'=>'admin'],function(){
    Route::resource('login',LoginController::class);
    Route::group(['middleware'=>['guard']],function(){
        Route::resource('user',UserController::class);
        Route::resource('register',RegistrationController::class);
        Route::resource('dashboard',DashboardController::class);
        Route::resource('product',ProductController::class);
        Route::resource('permission',PermissionController::class);
        Route::resource('role',RoleController::class);
        Route::get('signout',[LoginController::class,'signOut'])->name('signout');
    });
});

