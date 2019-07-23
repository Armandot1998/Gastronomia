<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    Public function product() {
        return $this->belongsTo('App\Product');
    } 
    Public function recipe() {
        return $this->belongsTo('App\Recipe');
    } 
}
