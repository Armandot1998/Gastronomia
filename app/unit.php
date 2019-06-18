<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
  
    protected $fillable = [
        'name',
        'quantity',
        ];


Public function products() {

    return $this->hasMany('App\ingredient');

} 
}
