<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $fillable = [
        'description',
        'order',
            ];

    public function recipe(){
    return $this->belongsTo('App/Recipe');
    }
}
