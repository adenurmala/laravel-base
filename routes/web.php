<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/home');
});
Route::get('/welcome', function () {
    return view('home/welcome');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/table', function() {
    return view('home/table');
});
Route::get('/data-tables', function() {
    return view('home/datatable');
});
