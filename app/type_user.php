<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_user extends Model
{
      
    protected $fillable = [
        'name',
        'description',
        ];


Public function userss() {

    return $this->hasMany('App\user');

} 
}
