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
Route::get('/create',[App\Http\Controllers\ProjetController::class,'create']);
Route::post('/create',[App\Http\Controllers\ProjetController::class,'store']);

Route::get('/index', [App\Http\Controllers\ProjetController::class, 'index'])->name('listeprojet');

Route::get('/show/{id}', [App\Http\Controllers\ProjetController::class, 'show'])->name("show");

