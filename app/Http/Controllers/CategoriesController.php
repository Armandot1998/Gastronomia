<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = Category::get();
        return response()->json(['categories' =>$categories], 200);
    }

    public function getCategoryId($id){
        $category = Category::where('id', '=', $id)->get();
        return response()->json(['category' => $category], 200);
    }
}
