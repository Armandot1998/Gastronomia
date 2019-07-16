<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        return response()->json(['Categories' => $categories], 200);
     
    }
    
    public function getCategoryById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['category']; 
        $category = Category::findOrFail($dataCategory['id']);
        return response()->json(['category'=>$category],200); 


    } 

    public function postCategory(Request $request){
        $category = new Category();
        $category->name= $request->name;
        $category->state= $request->state;
        $category->save();      
        return response()->json(['categories' => $category], 200);        
    } 
    
    public function putCategory(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['category']; 
        $category = Category::find($dataCategory['id']);
        $category->update($request->all());
        return response()->json(['category'=>$category],200); 
    }
}
