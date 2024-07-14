<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralViewController;

Route::get("/thanks", [GeneralViewController::class, "no_authorized"])->name("general.no_authorized");
Route::get("/no-authorized", [GeneralViewController::class, "no_authorized"])->name("general.no-authorized");

