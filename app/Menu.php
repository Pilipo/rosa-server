<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name'];

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe');
    }
}
