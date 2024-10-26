<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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



Route::get( '/', function(){
    return view('home');
});

Route::get( '/admin1', function(){
    return view('Admin.pages.index');
});



// Admin panel routes

    // Menu 
    Route::get( '/menu', [MenuController::class, 'index'])->name('menu');
    Route::get( '/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post( '/menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::post( '/menu/update', [MenuController::class, 'update'])->name('menu.update');
    Route::get( '/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');

