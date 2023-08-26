<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
    return view('about');
});


Route::get('/',[\App\Http\Controllers\HomePageController::class,'index']);
// Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index']);

Route::get('/admin/all-contacts',[\App\Http\Controllers\ContactController::class,'getAllContacts'])->name('allContacts');
Route::get('/admin/all-products',[\App\Http\Controllers\ProductsController::class,'index'])->name('allProducts');

Route::post("/admin/save-product",[\App\Http\Controllers\ShopController::class,'addProduct'])->name('saveProduct');
Route::view("/admin/add-products",'add');
Route::get("admin/delete-product/{product}",[\App\Http\Controllers\ProductsController::class,'delete'])->name('deleteProduct');
Route::get("admin/delete-contact/{contact}",[\App\Http\Controllers\ContactController::class,'delete'])->name('deleteContact');

Route::get("/admin/edit-product/{productId}",[\App\Http\Controllers\ProductsController::class,'edit'])->name('editProduct');
Route::post('/admin/update-product/{id}', [App\Http\Controllers\ProductsController::class, 'update'])->name('updateProduct');

Route::get("/admin/edit-contact/{contactId}",[\App\Http\Controllers\ContactController::class,'edit'])->name('editContact');
Route::post('/admin/update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('updateContact');




Route::post('/send-contact',[\App\Http\Controllers\ContactController::class,'sendContact']);


