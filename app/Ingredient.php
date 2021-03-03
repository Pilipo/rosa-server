<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name', 'amount'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

}
