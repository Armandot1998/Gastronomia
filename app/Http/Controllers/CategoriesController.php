<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = Category::where('state', '=','Active')->get();
        return response()->json(['Categories' => $categories], 200);
     
    }
    
    public function getCategoryById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['category']; 
        $category = Category::findOrFail($dataCategory['id']);
        return response()->json(['category'=>$category],200); 


    } 

    public function postCategory(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory=$dataBodyClient['category'];
        $category= Category::create([
            'name'=>$dataCategory['name'],
            'state'=>$dataCategory['state']]);
            return 'Operation Sucssesfull!!';     
    } 
    
    public function putCategory(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['category']; 
        $category = Category::find($dataCategory['id']);
        $category->update($request->all());
        return 'Operation Sucssesfull!!'; 
    
    }

    public function DeleteCategory(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['category']; 
        $category = Category::find($dataCategory['id']);
        $category->update([
            'state'=>$dataCategory['state']]);
        return 'Operation Sucssesfull!!'; 
    
    }
}
