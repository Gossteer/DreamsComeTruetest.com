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
    return view('site.index');
})->name('/');

Route::get('/about', function () {
    return view('site.about');
})->name('/about');

Route::get('/contact', function () {
    return view('site.contact');
})->name('/contact');

// Что делать с экскурсиями?

Route::get('/packages', function () {
    return view('site.packages');
})->name('/packages');

Route::get('/admin', function () {
    return view('admin.tours');
})->name('/admin');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/lol','CustomerController');
