<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Middleware
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Root
Route::get('/', function () {
    return ['hello'];
});

// Recipes
Route::get('/recipes', 'RecipeController@index');
Route::post('/recipes', 'RecipeController@create');
// Route::post('/recipes', function() {
//     factory(App\Recipe::class, 3)->create();
// });

Route::get('/recipes/{id}', 'RecipeController@show');
Route::patch('/recipes/{id}', 'RecipeController@update');
Route::delete('/recipes/{id}', 'RecipeController@delete');

// Dates
Route::get('/date', 'DateController@index');
Route::post('/date', function() {
    $date = \App\Date::first();
    $recipe = \App\Recipe::first();
    $recipe->dates()->attach($date);

    // \App\Date::create([
    //     'meal day' => '2020-09-28'
    // ]);
    // \App\Date::create([
    //     'meal day' => '2020-09-29'
    // ]);
    // \App\Date::create([
    //     'meal day' => '2020-09-30'
    // ]);
    // \App\Date::create([
    //     'meal day' => '2020-10-01'
    // ]);
});
