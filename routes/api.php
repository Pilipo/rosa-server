<?php

use App\Http\Resources\RecipeCollection;
use App\Http\Resources\RecipeResource;
use App\Http\Resources\SectionCollection;
use App\Recipe;
use App\Section;
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

// RECIPES
Route::get('/recipes', function () {
    return new RecipeCollection(Recipe::paginate(5));
});

Route::get('/recipe/{recipe_id}', function ($recipe_id) {
    return new RecipeResource(Recipe::findOrFail($recipe_id));
});

// SECTIONS
Route::get('/sections', function () {
    return new SectionCollection(Section::paginate());
});