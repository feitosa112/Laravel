<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view('about');
});


Route::get('/',[\App\Http\Controllers\HomePageController::class,'index']);
// Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index']);

Route::get('/admin/all-contacts',[\App\Http\Controllers\ContactController::class,'getAllContacts']);
Route::get('/admin/all-products',[\App\Http\Controllers\ProductsController::class,'index']);

Route::post("/add-product",[\App\Http\Controllers\ShopController::class,'addProduct']);
Route::get("/admin/add-products",[\App\Http\Controllers\ShopController::class,"addView"]);
Route::get("admin/delete-product/{product}",[\App\Http\Controllers\ProductsController::class,'delete']);
Route::get("admin/delete-contact/{contact}",[\App\Http\Controllers\ContactController::class,'delete'])->name('deleteContact');


Route::post('/send-contact',[\App\Http\Controllers\ContactController::class,'sendContact']);


