<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->loadMissing('ingredients');
        return [
            'id' => $this->id,
            'name' => $this->name,
            'servings' => $this->servings,
            'ingredients' => IngredientResource::collection($this->whenLoaded('ingredients')),
        ];
    }
}
