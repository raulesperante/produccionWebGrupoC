<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpiritController;

include(base_path("routes/products.php"));
include(base_path("routes/auth.php"));

Route::get('/', [HomeController::class, "index"])->name('home.index');
Route::get('/spirit', [SpiritController::class, "index"])->name('spirit.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

