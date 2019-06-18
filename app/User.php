<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name',
         
    ];
    //relacion entre modelos
    //muchos a uno

    Public function category() {

        return belongsTo('App\Category');
    
    } 

}
