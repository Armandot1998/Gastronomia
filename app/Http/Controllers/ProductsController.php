<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;

class ProductsController extends Controller
{
    public function getProducts(){
        $products = Product::where('product_state', '=','Activo')->get();
        return response()->json(['Products' => $products], 200);
    } 

    public function getProductByName(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct = $dataBodyClient['Product']; 
        $product = Product::where('product_name', '=',$dataProduct['product_name'])->get();
        return response()->json(['Product'=>$ $product],200);     
    } 
 
    public function postProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct=$dataBodyClient['Product'];
        $dataCategory=$dataBodyClient['Category'];
        $category = Category::findOrFail($dataCategory['id']);
        $product = $category->products()->create([
        'product_name'=>$dataProduct['product_name'],
        'product_state'=>$dataProduct['product_state']]);
        return 'Operation Sucssesfull!!'; 
    }

    public function putProduct(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProduct = $dataBodyClient['Product']; 
        $product = Product::find($dataProduct['id']);
        $response = $product->update([
            "product_name"=>$dataProduct['product_name'],
            "product_state"=>$dataProduct['product_state'],
            "category_id"=>$dataProduct['category_id']]);
        return 'Operation Sucssesfull!!';
    }
    
    public function inner(){
        $inner= DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('*')
        ->get();
        return response()->json(['Inner'=> $inner],200);
}
}
