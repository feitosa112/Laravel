<?php

use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view('about');
});


Route::get('/',[\App\Http\Controllers\HomePageController::class,'index']);
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index']);