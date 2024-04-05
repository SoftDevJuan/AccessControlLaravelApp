<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/sobre-nosotros', function () {
    return view('sobre_nosotros');
})->name('sobre_nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Rutas para el login y registro
Route::get('/login-registro', function () {
    return view('login_registro');
})->name('login_registro');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@register')->name('register');


