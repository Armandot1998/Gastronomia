<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'product_name',
    'product_state',      
    ];
    
    Public function category() {
        return $this->belongsTo('App\Category');
    } 

    public function ingredients(){
        return $this->hasMany('App\Ingredient');
     } 

}
