<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


Route::middleware(["auth"])->group(function () {
    Route::get("/carrito", [CartController::class, "index"])->name("cart.index");
    Route::post("/carrito", [CartController::class, "handleItem"])->name("cart.handleItem");
    Route::post("/cart-store/{product}", [CartController::class, "store"])->name("cart.store");
});







