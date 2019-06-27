<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name',
        'quantity',
            ];

    public function ingredients(){
    return $this->hasMany('App/Ingredient');
    }
}
