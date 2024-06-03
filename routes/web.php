<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/programas', function () {
    return view('programas');
})->name('programas');

Route::get('/talleres','App\Http\Controllers\TalleresController@index')->name('talleres');

Route::get('/asesoramiento', function () {
    return view('asesoramiento');
})->name('asesoramiento');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');








