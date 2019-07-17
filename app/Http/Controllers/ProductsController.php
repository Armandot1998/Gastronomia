<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function getProducts(){
        $products = Product::all();
        return response()->json(['Products' => $products], 200);
    } 

    public function getProductById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataCategory = $dataBodyClient['product']; 
        $category = Product::findOrFail($dataCategory['id']);
        return response()->json(['product'=>$category],200);     
    } 
 
    public function postProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct=$dataBodyClient['product'];
        $dataCategory=$dataBodyClient['categories'];
        $category = Category::findOrFail($dataCategory['id']);
        $product = $category->products()->create([
        'name'=>$dataProduct['name'],
        'state'=>$dataProduct['state']]);
        return $product;
    }

    public function putProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct = $dataBodyClient['product']; 
        $product = Product::find($dataProduct['id']);
        $response = $product->update([
            "name"=>$dataProduct['name'],
            "state"=>$dataProduct['state'],
            "category_id"=>$dataProduct['category_id']]);
        return response()->json($response, 201); 
    }

}
