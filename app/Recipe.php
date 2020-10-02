<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'yield'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function dates()
    {
        return $this->belongsToMany(Date::class);
    }

}
