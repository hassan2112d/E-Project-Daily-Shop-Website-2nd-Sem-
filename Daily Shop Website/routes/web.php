<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\BannerController;

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


Route::get('admin',[AdminController::class,'index']);

Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');


Route::group(['middleware'=>'admin_auth'],function(){

    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/category/addCategory',[CategoryController::class,'addcategory']);
    Route::post('admin/category/addcategoryprocess',[CategoryController::class,'addCategoryProcess'])->name('category.addCategoryProcess');
    Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
    Route::get('admin/category/addCategory/{id}',[CategoryController::class,'addcategory']);


    Route::get('admin/product',[ProductController::class,'index']);
    Route::get('admin/product/addProduct',[ProductController::class,'addproduct']);
    Route::post('admin/product/addproductprocess',[ProductController::class,'addproductprocess'])->name('product.addproductprocess');
    Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
    Route::get('admin/product/addProduct/{id}',[ProductController::class,'addproduct']);

    Route::get('admin/customer',[CustomerController::class,'index']);
    Route::get('admin/customer/show/{id}',[CustomerController::class,'show']);

    Route::get('admin/banner',[BannerController::class,'index']);
    Route::get('admin/banner/addBanner',[BannerController::class,'addBanner']);
    Route::get('admin/banner/addBanner/{id}',[BannerController::class,'addBanner']);
    Route::post('admin/banner/addBannerProcess',[BannerController::class,'addBannerProcess'])->name('banner.addBannerProcess');
    Route::get('admin/banner/delete/{id}',[BannerController::class,'delete']);
    Route::get('/',[frontController::class,'index']);

    Route::get('search/{str}',[frontController::class,'search']);
    Route::get('product/{id}',[frontController::class,'product']);
    Route::get('category',[frontController::class,'catProducts']);
    Route::get('cart',[frontController::class,'cart']);
    Route::get('contact',[frontController::class,'contact']);
    Route::get('about',[frontController::class,'about']);

    Route::get('registration',[frontController::class,'registration']);
    Route::post('registerProcess',[frontController::class,'registerProcess'])->name('registration.registerProcess');
    
    Route::post('loginProcess',[frontController::class,'loginProcess'])->name('login.loginProcess');
    Route::get('logout', function () {
        session()->forget('FRONT_USER_LOGIN');
        session()->forget('FRONT_USER_ID');
        session()->forget('FRONT_USER_NAME');
        return redirect('/');
});

    Route::get('admin/logout', function () {
        session()->forget('adminLogin');
        session()->forget('adminLogin');
        session()->flash('error','You Are Loged out');
        return redirect('admin');
    });
});

