<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('/Problematica', function () {
    return view('problematica');
})->name('problematica');

Route::get('/Flora', function () {
    return view('flora');
})->name('flora');

Route::get('/Soluciones', function () {
    return view('solucion');
})->name('solucion');

Route::get('/Nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/Extra', function () {
    return view('extra');
})->name('extra');


