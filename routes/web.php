<?php

use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view('about');
});


Route::get('/',[\App\Http\Controllers\HomePageController::class,'index']);
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index']);

Route::get('/admin/all-contacts',[\App\Http\Controllers\ContactController::class,'getAllContacts']);
Route::get("/add",[\App\Http\Controllers\ShopController::class,'addProduct']);

Route::post('/send-contact',[\App\Http\Controllers\ContactController::class,'sendContact']);


