<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/plant', function () {
    return view('plant');
})->name('plant');

Route::get('/plant/detail', function () {
    return view('plant_detail');
})->name('plant_detail');

Route::get('/garden', function () {
    return view('garden');
})->name('garden');

Route::get('/garden/detail', function () {
    return view('garden_detail');
})->name('garden_detail');

Route::get('/about-us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

