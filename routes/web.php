<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index','PostController@index')->name('post.index');

Route::get('/create','PostController@create')->name('post.create');

Route::post('/create/store','PostController@store')->name('post.store');

Route::get('/show/{post}','PostController@show')->name('post.show');
