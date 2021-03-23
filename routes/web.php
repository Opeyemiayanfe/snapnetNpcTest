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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/state/create', [App\Http\Controllers\StateController::class, 'create'])->name('state');
Route::post('/state', [App\Http\Controllers\StateController::class, 'store']);

Route::get('/lga/create', [App\Http\Controllers\LgaController::class, 'create'])->name('lga');
Route::post('/lga', [App\Http\Controllers\LgaController::class, 'store']);

Route::get('/ward/create', [App\Http\Controllers\WardController::class, 'create'])->name('lga');
Route::post('/ward', [App\Http\Controllers\WardController::class, 'store']);

Route::get('/citizen/create', [App\Http\Controllers\CitizenController::class, 'create'])->name('lga');
Route::post('/citizen', [App\Http\Controllers\CitizenController::class, 'store']);