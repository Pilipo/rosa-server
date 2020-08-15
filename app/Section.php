<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name'];

    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

}