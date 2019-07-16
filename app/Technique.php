<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $fillable = [
        'name',
        'state',
        ];

        public function recipes(){
            return $this->hasMany('App\Recipe');
        }    
}
