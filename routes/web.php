<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('Inicio');
Route::view('/acerca', 'acerca')->name('acerca');
Route::get('/Portafolio', 'ejemploControllerr')->name('Producto');
Route::view('/contacto', 'Contacto')-> name('contacto');
Route::post('Contacto', 'messController@store')->name('Contacto');
Route::view('/Login', 'Login')-> name('Login');