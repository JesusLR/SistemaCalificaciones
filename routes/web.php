<?php

use GuzzleHttp\Middleware;
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

Route::resource('materiauno', App\Http\Controllers\MateriaunoController::class)->middleware('auth');
Route::resource('materiaunoCalificacion', App\Http\Controllers\WatchController::class);
Route::resource('materiadosCalificacion', App\Http\Controllers\WatchdosController::class);
Route::resource('materiados', App\Http\Controllers\MateriadoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('', 'WelcomeController'); //para utilizar toas las rutas


