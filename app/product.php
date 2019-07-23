<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 
        'category_name',
        'cost',
    ];

    Public function ingredients() {
        return $this->hasMany('App\Ingredient');
    } 

}
