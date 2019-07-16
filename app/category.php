<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'state'
        ];


Public function products() {
    return $this->hasMany('App\Product');
} 

}
