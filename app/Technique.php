<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $fillable = [
        'technique_name',
        'technique_state',
        ];

        public function recipes(){
            return $this->hasMany('App\recipe');
        }    
}
