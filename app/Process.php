<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $fillable = [
        'description',
        'order',
        'state',
        ];

        public function recipe(){
            return $this->belongsTo('App\Recipe');
            }
}
