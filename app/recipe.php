<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'recipe_name',
        'recipe_document_no',
        'recipe_preparedness',
        'recipe_pax',
        'recipe_state',
        ];

        public function technique(){
            return belongsTo('App\Technique');
        }
        
        public function process(){
            return $this->hasMany('App\Process');
        }

        public function ingredients(){
            return $this->hasMany('App\Ingredient');
        }
        
           
}
