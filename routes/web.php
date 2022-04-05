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

Route::get('Nayarit', function () {
    return view('principal');
})->name('principal');

Route::get('/Gastronomia', function () {
    return view('gastronomia');
})->name('gastronomia');

Route::get('/Novillero', function () {
    return view('novillero');
})->name('novillero');

Route::get('/Tecuala', function () {
    return view('tecuala');
})->name('tecuala');
