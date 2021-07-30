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

Route::get('/admisiones-2022', function () {
    return view('index');
})->name('landing');

# CRUD registros
Route::post('formulario', 'App\Http\Controllers\RegistroController@create');
Route::get('hipi', 'App\Http\Controllers\RegistroController@destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('formulario-list-excel', 'App\Http\Controllers\RegistroExcelController@exportExcel' )->name('formulario.excel');
