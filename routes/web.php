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
    return view('pages.home');
});

Route::get('/screening', function () {
    return view('pages.screening');
});

Route::get('/ski-jobs', function () {
    return view('pages.ski-jobs');
});

Route::get('/office-jobs', function () {
    return view('pages.office-jobs');
});
Route::get('/beach-club-jobs', function () {
    return view('pages.beach-club-jobs');
});

Route::get('/summer-jobs', function () {
    return view('pages.summer-jobs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
