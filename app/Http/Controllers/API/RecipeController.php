<?php

namespace App\Http\Controllers\API;

use App\Recipe;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class RecipeController extends Controller
{
    public function index(Request $request, Recipe $recipe)
    {
        return response()->json($recipe->paginate()->toArray());
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
        return response()->json($recipe->where('id', $id)->get()->toArray());
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
