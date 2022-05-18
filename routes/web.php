<?php

use Illuminate\Support\Facades\Route;


Route::view('login', 'login');

Route::view('home', 'home');

Route::post('login', function() {
    return view('home');
});





