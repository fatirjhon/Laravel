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

Route::get('home', function () {
    return view('Task1.home');
});

Route::get('contact', function () {
    return view('Task1.contact');
});

Route::get('profile', function () {
    return view('Task1.profile');
});

Route::resource('articles','articlesController');
