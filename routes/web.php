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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/place-order', function () {
    return view('place-order');
});

Route::get('/bedroom', function () {
    return view('bedroom');
});

Route::get('/dinning', function () {
    return view('dinning');
});

Route::get('/lounge', function () {
    return view('lounge');
});

Route::get('/single', function () {
    return view('single');
});
