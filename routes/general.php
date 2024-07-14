<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralViewController;

Route::post("/thanks", [GeneralViewController::class, "thanks"])->name("general.thanks");
Route::get("/thanks", [GeneralViewController::class, "no_authorized"])->name("general.no_authorized");
Route::get("/no-authorized", [GeneralViewController::class, "no_authorized"])->name("general.no-authorized");

