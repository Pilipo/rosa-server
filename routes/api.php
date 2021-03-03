<?php

use App\Http\Resources\RecipeCollection;
use App\Recipe;
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

Route::fallback(function() {
    return response()->json([
        'message' => 'Page Not Found.'
    ], 404);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return ['hello'];
});

Route::get('/recipes', function () {
    return new RecipeCollection(Recipe::all());
});