<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recipes extends Model
{
    protected $fillable = [
        'name',
        'document_no',
        'preparedness',
        'pax',
        ];

        
Public function category() {

        return belongsTo('App\ingredient');
    
    } 

}
