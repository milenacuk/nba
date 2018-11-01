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
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');

Route::get('players', 'PlayersController@index');
Route::get('/players/{id}', 'PlayersController@show');


Route::get('/register', 'UsersController@create');
Route::post('/register','UsersController@store');