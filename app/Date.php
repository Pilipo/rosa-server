<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = ['meal_day'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }
}
