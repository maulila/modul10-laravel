<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    return 'Selamat pagi dunia, 707082430010';
});