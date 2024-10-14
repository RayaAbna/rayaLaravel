<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
});

Route::get('/', function () {
    return view('index');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
}); 

Route::get('/login', function () {
    return view('login');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
}); 