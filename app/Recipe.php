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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
