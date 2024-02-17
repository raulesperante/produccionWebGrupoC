<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get("/carrito", [CartController::class, "index"])->name("cart.index");








