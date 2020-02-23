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

Route::resource('users', 'UsersController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/docs', 'UsersController@docs')->name('docs');
Route::get('/register', 'UsersController@create')->name('register');
//Route::get('/login', 'UsersController@loginCreate')->name('login');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store')->name('login');
Route::delete('/logout', 'SessionsController@destory')->name('logout');