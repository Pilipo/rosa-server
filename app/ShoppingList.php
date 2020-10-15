<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    protected $fillable = ['from_date', 'to_date'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
