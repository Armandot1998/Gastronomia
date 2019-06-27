<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
            ];

    public function category(){
        return $this->belongsTo('App/Category');
    }
  
    public function ingredients(){
        return $this->hasMany('App/Ingredient');
        }    
}
