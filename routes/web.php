<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// frontend controller

Route::get( '/', [HomeController::class, 'index']);
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





