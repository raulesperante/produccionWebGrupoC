<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::middleware(["auth", "is_admin"])->controller(ProductController::class)->group(function(){
    Route::get('/productos',"index")->name('products.index');
    Route::get('/productos/crear',"create")->name('products.create');
    Route::post('/productos/crear',"store")->name('products.store');
    Route::get('/productos/{product}',"show")->name('products.show');
    Route::get('/productos/editar/{product}',"edit")->name('products.edit');
    Route::post('/productos/actualizar/{product}',"update")->name('products.update');
    Route::delete('/productos/eliminar/{product}',"destroy")->name('products.destroy');
});
