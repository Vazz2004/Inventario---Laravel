<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('pages.inicio');});
Route::get('/login', function () {return view('pages.login');})->name('login');
Route::get('/registro', function () {return view('pages.registro');})->name('registro');
