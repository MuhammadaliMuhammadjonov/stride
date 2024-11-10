<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestController;
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

Route::get( '/test', [TestController::class, 'possibleStringCount']);
Route::get('/menu/section', function() {
    return view('Admin.pages.Menu.section');
});

// Admin panel routes
    // Menu 
    Route::get( '/menu', [MenuController::class, 'index'])->name('menu');
    Route::get( '/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post( '/menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::post( '/menu/update', [MenuController::class, 'update'])->name('menu.update');
    Route::get( '/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::get('/menu/delete/{id}' , [MenuController::class, 'destroy'])->name('menu.destroy');
    Route::post('/menu/addtion' , [MenuController::class , 'updateAddtion' ])->name('menu.addtion');
    Route::post('/menu/updateSec' , [MenuController::class , 'updateSection'])->name('menu.sectionUpdt');
    Route::get('/menu/show/{id}' , [MenuController::class , 'show' ])->name('menu.show');
    Route::get('/menu/section/{id}' , [MenuController::class , 'showSection' ])->name('menu.section');

