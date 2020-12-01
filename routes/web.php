<?php


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

Route::get('/admin561890/blogs', function () {
    return view('admin.blogs');
})->name('admin.blogs');

Route::get('/admin561890/events', function () {
    return view('admin.events');
})->name('admin.events');

Route::get('/admin561890/messages', function () {
    return view('admin.messages');
})->name('admin.messages');

Route::get('/admin561890/places', function () {
    return view('admin.places');
})->name('admin.places');

Route::get('/admin561890/reports', function () {
    return view('admin.reports');
})->name('admin.reports');
