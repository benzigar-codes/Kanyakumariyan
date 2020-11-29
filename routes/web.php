<?php

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

// Users Route


Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/register', function () {
    return view('user.register');
})->name('user.register');

Route::get('/login', function () {
    return view('user.login');
})->name('user.login');

Route::get('/home', function () {
    return view('user.home');
})->name('user.home');


// Admin Route

Route::get('/admin561890', function () {
    return view('admin.home');
})->name('admin.home');



