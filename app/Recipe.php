<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'servings'];

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }
}
