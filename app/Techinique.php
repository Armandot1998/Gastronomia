<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techinique extends Model
{
    protected $fillable = [
        'name',
            ];

    public function recipes(){
    return $this->hasMany('App/Recipe');
    }
}
