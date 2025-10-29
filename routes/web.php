<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// frontend controller

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/return-process', [HomeController::class, 'returnProcess']);
Route::get('/view-cart', [HomeController::class, 'viewCart']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/category-products', [HomeController::class, 'categoryProducts']);
Route::get('/sub-category-products', [HomeController::class, 'subCategoryProducts']);
Route::get('/product-details', [HomeController::class, 'productDetails']);
Route::get('/view-type-products', [HomeController::class, 'viewTypeProducts']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [HomeController::class, 'termsCondition']);
Route::get('/refund-policy', [HomeController::class, 'refundPolicy']);
Route::get('/payment-policy', [HomeController::class, 'paymentPolicy']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);

// admin login controller

Route::get('/admin/login', [AuthController::class, 'adminloginpanel']);
Auth::routes();
Route::get('/admin/dashboard', [AdminController::class, 'admindashboard']);

//admin controller(category)

Route::get('/admin/category/create',[CategoryController::class, 'create']);
Route::get('/admin/category/list',[CategoryController::class, 'list']);
Route::post('/admin/category/store', [CategoryController::class, 'store']);
// Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete']);
Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
