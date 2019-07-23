<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductsController extends Controller
{
  
    public function getProducts(){
        $products = Product::get();
        return response()->json(['Products' => $products], 200);
    }

    public function postProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory=$dataBodyClient['Product'];
        $product= Product::create([
            'product_name'=>$dataCategory['product_name'],
            'category_name'=>$dataCategory['category_name'],
            'cost'=>$dataCategory['cost']]);

            return 'Operation Sucssesfull!!';     
    }

    public function putProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['Category']; 
        $category = Category::find($dataCategory['id']);
        $category->update($request->all());

        return 'Operation Sucssesfull!!'; 
    }

    public function deleteProduct(Request $request) {
        $product = Product::findorfail($request->id)->delete();

         return 'Operation Sucssesfull!!'; 
    }
}
