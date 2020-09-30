<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'yield'];

    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function dates()
    {
        return $this->belongsToMany(Date::class);
    }

}
