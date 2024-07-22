<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;




Route::get('/contacto', [ContactoController::class, "index"])->name('contacto.index');
Route::post('/enviar-mensaje', [ContactoController::class, "store"])->name('contacto.store');



