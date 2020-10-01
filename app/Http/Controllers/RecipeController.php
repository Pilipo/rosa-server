<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Recipe $recipe)
    {
        return response()->json($recipe->with('dates')->paginate()->toArray());
    }

    public function create(Request $request, Recipe $recipe)
    {
        $data = $request->validate([
            'name' => 'required|string|between:1,50',
            'yield' => 'required|string|between:1,50',
        ]);

        return response()->json($recipe->create($data)->toArray());
    }

    public function show($id, Request $request, Recipe $recipe)
    {
        return response()->json($recipe->where('id', $id)->with('dates')->get()->toArray());
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|between:1,50',
            'yield' => 'required|string|between:1,50',
        ]);
    
        if ($recipe->update($data)) {
            return response()->json(['message' => "Success"], 200);
        } else {
            return response()->json($recipe->fail());
        }

    }

    public function delete($id, Recipe $recipe)
    {
        if ($recipe->destroy($id)) {
            return response()->json(['message' => "Success"], 200);
        } else {
            return response()->json($recipe);
        }
    }
}
