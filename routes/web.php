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

Auth::routes();

Route::get('/home', 'WEB\HomeController@index')->name('home');

Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/planner', 'WEB\Planner\CalendarController@index');
Route::get('/recipes', 'WEB\Recipes\RecipeController@index');
