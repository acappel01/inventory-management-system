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

Route::get('/layout-static', function() {
    return view('layout-static');
});

Route::get('/layout-sidenav-light', function() {
    return view('layout-sidenav-light');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/password', function() {
    return view('password');
});

Route::get('/charts', function() {
    return view('charts');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/tables', function() {
    return view('tables');
});

Route::get('/401', function() {
    return view('401');
});

Route::get('/404', function() {
    return view('404');
});

Route::get('/500', function() {
    return view('500');
});