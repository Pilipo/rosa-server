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
Route::get('/recipes', 'API\RecipeController@index');
// Route::post('/recipes', 'API\RecipeController@create');
// Route::post('/recipes', function() {
//     factory(App\Recipe::class, 3)->create();
// });

// Route::get('/recipes/{id}', 'API\RecipeController@show');
// Route::patch('/recipes/{id}', 'API\RecipeController@update');
// Route::delete('/recipes/{id}', 'API\RecipeController@delete');