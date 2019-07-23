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

    public function updateProducts(Request $request)
    {
        $dataBodyClient= $request->json()->all();
        $dataProduct= $dataBodyClient['product'];
        $dataCategory= $dataBodyClient['category'];
        $response = Product::findorfail($dataProduct['id']);
        $response->update(['nombre' => $dataProduct['nombre'],
        'precio' => $dataProduct['precio'],
        'stock' => $dataProduct['stock']]);
        return  response()->json([$response->category_id,$response->nombre], 200);
        //    return response()->json(['message' => 'Producto actualizado correctamente id= '.$request->id], 200);
    }

    public function deleteProduct(Request $request)
    {
        //$product = Product::where('id', '>=', $request->id)->delete();
        $product = Product::findorfail($request->id)->delete();
        return response()->json(['estado' => $product], 200);
    }
    public function deleteProductId($id)
    {
        $product = Product::where('id', '=', $id)->delete();
        return response()->json(['message' => 'Producto eliminado correctamente por Id'], 200);
    }
}
