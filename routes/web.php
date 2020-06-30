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
    return view('pages.auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/layout-static', function() {
    return view('pages.layout-static');
});

Route::get('/layout-sidenav-light', function() {
    return view('pages.layout-sidenav-light');
});

Route::get('/password', function() {
    return view('pages.auth.password');
});

Route::get('/charts', function() {
    return view('pages.charts');
});

Route::get('/register', function() {
    return view('pages.auth.register');
});

Route::get('/tables', function() {
    return view('pages.tables');
});

Route::get('/401', function() {
    return view('pages.errors.401');
});

Route::get('/404', function() {
    return view('pages.errors.404');
});

Route::get('/500', function() {
    return view('pages.erros.500');
});