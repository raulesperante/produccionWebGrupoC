<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::view("/login", "auth.login")->name("login");
Route::view("/privada", "secret")->middleware('auth')->name("privada");

Route::post("/registro", [LoginController::class, "register"])->name("auth.registerLogic");
Route::post("/login", [LoginController::class, "login"])->name("auth.loginLogic");
Route::get("/logout", [LoginController::class, "logout"])->name("logout");


Route::view("/registro", "auth.register")->name("auth.register");




