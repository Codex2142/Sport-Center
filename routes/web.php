<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/formRegisterBilliard', function () {
    return view('formRegisterBilliard');
});

Route::get('/formRegisterFutsal', function () {
    return view('formRegisterFutsal');
});

Route::get('/formRegisterBulutangkis', function () {
    return view('formRegisterBulutangkis');
});

Route::get('/adminboard', function () {
    return view('adminboard');
});


Route::post('/register', [RegisterController::class, 'store']);
