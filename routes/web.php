<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/bitacora')->middleware('auth')->group(
    function (){
        Route::get('/', [\App\Http\Controllers\BitacoraController::class, 'index'])->name('bitacoraIndex');
        Route::get('/register', [\App\Http\Controllers\BitacoraController::class, 'register'])->name('bitacoraRegister');
        Route::post('/create', [\App\Http\Controllers\BitacoraController::class, 'create'])->name('bitacoraCreate');
        Route::get('/edit/{id}',[\App\Http\Controllers\BitacoraController::class, 'edit'])->name('bitacoraEdit');
        Route::get('/show/{id}',[\App\Http\Controllers\BitacoraController::class, 'show'])->name('bitacoraShow');
        Route::patch('/update/{id}', [\App\Http\Controllers\BitacoraController::class, 'update'])->name('bitacoraUpdate');
        Route::delete('/delete/{id}', [\App\Http\Controllers\BitacoraController::class, 'delete'])->name('bitacoraDelete');

    }
);
