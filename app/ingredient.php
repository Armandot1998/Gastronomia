<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'quantity',
        'description',
        'cost',
            ];

    public function category(){
    return $this->belongsTo('App/Product');
    }

    public function unit(){
    return $this->belongsTo('App/Unit');
    }

    public function recipe(){
    return $this->belongsTo('App/Recipe');
    }
 
}
