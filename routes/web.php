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

Route::get('/', 'PostController@index')->name('index');

Auth::routes();

Route::get('/works', 'PostController@works')->name('works');
Route::get('/inspired', 'PostController@inspired')->name('inspired');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{id}', 'UserController@show');

Route::middleware('auth')->group(function () {
    Route::get('me', 'UserController@edit');
});

Route::prefix('posts')->as('posts.')->group(function() {
    
    Route::middleware('auth')->group(function () {
        Route::get('create', 'PostController@create')->name('create');
        Route::post('store', 'PostController@store')->name('store');
        Route::post('{post}/delete', 'PostController@delete')->name('delete');
        Route::get('/{post}/edit', 'PostController@edit')->name('edit');
        Route::post('/{post}/edit', 'PostController@update')->name('update');
    });

    Route::get('{post}', 'PostController@show')->name('show');
});





