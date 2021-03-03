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

    // public function meals()
    // {
    //     return $this->belongsToMany(Meal::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
