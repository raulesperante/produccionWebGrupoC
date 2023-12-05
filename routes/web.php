<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SpiritController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|   
*/

Route::get('/', function () {
    return view('welcome');
    
});


Route::get('users/{id}', function ($id) {
    
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/productos',"index")->name('products.index');
    Route::get('/productos/crear',"create")->name('products.create');
    Route::post('/productos/crear',"store")->name('products.store');
    Route::get('/productos/{product}',"show")->name('products.show');
    Route::get('/productos/editar',"edit")->name('products.edit');
    Route::get('/productos/eliminar',"destroy")->name('products.destroy');
});

Route::get('/', [HomeController::class, "index"])->name('home.index');

Route::get('/spirit', [SpiritController::class, "index"])->name('spirit.index');


//Route::get('/productos', [ProductController::class, "index"])->name('products.index');
//Route::get('/productos/crear', [ProductController::class, "create"])->name('products.create');
//Route::post('/productos/crear', [ProductController::class, "store"])->name('products.store');
//Route::get('/productos/{product}', [ProductController::class, "show"])->name('products.show');
//Route::get('/productos/editar', [ProductController::class, "edit"])->name('products.edit');
//Route::get('/productos/eliminar', [ProductController::class, "destroy"])->name('products.destroy');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
