<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function getProducts(){
        $products = Product::where('state', '=','Active')->get();
        return response()->json(['Products' => $products], 200);
    } 

    public function getProductByName(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct = $dataBodyClient['Product']; 
        $product = Product::where('name', '=',$dataProduct['name'])->get();
        return response()->json(['Product'=>$ $product],200);     
    } 
 
    public function postProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct=$dataBodyClient['Product'];
        $dataCategory=$dataBodyClient['Category'];
        $category = Category::findOrFail($dataCategory['id']);
        $product = $category->products()->create([
        'name'=>$dataProduct['name'],
        'state'=>$dataProduct['state']]);
        return 'Operation Sucssesfull!!'; 
    }

    public function putProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct = $dataBodyClient['Product']; 
        $product = Product::find($dataProduct['id']);
        $response = $product->update([
            "name"=>$dataProduct['name'],
            "state"=>$dataProduct['state'],
            "category_id"=>$dataProduct['category_id']]);
        return 'Operation Sucssesfull!!';
    }

}
