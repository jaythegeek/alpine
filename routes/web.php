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

Route::get('/yacht-jobs', function () {
    return view('pages.yacht-jobs');
});

Route::get('/jobs', function () {
    return view('pages.jobs');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/fetch-jobs', 'HomeController@fetchJobs');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@viewPost');


Route::get('/posts', 'BlogController@indexAdmin');
Route::get('/fetch-posts', 'BlogController@fetchPosts');
Route::get('/fetch-posts-admin', 'BlogController@fetchPostsAdmin');

Route::get('/search-posts', 'BlogController@searchPosts');


Route::get('/create-post', 'BlogController@createViewAdmin');
Route::post('/posts', 'BlogController@createAdmin');
Route::post('/post-image-upload', 'BlogController@postImageUpload');
Route::get('/posts/{id}', 'BlogController@viewAdmin');
Route::post('/posts/{id}', 'BlogController@updateAdmin');
Route::delete('/posts/{id}', 'BlogController@deleteAdmin');