<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name'];

    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}