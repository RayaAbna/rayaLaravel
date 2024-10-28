<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
});

// Route::get('/index', function () {
//     return view('index');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
// }); 

// Route::get('/', function () {
//     return view('login');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
// });

// Route::get('/about', function () {
//     return view('about');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
// }); 

route::get('/',[HomeController::class, 'index'])->name('home');
route::get('/login',[HomeController::class, 'login'])->name('login');
route::get('/about',[HomeController::class, 'about'])->name('about');