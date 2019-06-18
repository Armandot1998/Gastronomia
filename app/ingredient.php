<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    protected $fillable = [
        'quantity',
        'description',
        'cost',
        ];


Public function unit() {

    return belongsTo('App\unit');        
}

Public function product() {

    return belongsTo('App\product');        
}



Public function products() {

    return $this->hasMany('App\recipe');
} 
}
