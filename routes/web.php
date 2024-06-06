<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/formRegisterBilliard', function () {
    return view('formRegisterBilliard');
})->name('form.register.billiard');

Route::get('/formRegisterFutsal', function () {
    return view('formRegisterFutsal');
})->name('form.register.futsal');

Route::get('/formRegisterBulutangkis', function () {
    return view('formRegisterBulutangkis');
})->name('form.register.bulutangkis');

Route::get('/adminboard', function () {
    return view('adminboard');
})->name('adminboard');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
