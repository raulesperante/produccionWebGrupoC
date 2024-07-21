<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralViewController;

Route::get("/thanks", [GeneralViewController::class, "no_authorized"])->name("general.no_authorized");
Route::get("/no-authorized", [GeneralViewController::class, "no_authorized"])->name("general.no-authorized");
Route::get("/dashboard", [GeneralViewController::class, "dashboard"])->middleware(["auth", "is_admin"])->name("general.dashboard");

Route::get('/mensajes', function () {
    return view('general.message');
})->middleware(["auth", "is_admin"])->name('general.message');