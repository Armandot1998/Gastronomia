<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function getProducts(){

        $products = Product::all();
        //Para el O **orWere**
        return response()->json(['products' => $products], 200);
         
    } 



    public function createProduct(Request $request){

        $dataBodyClient = $request->json()->all();
        $dataProduct=$dataBodyClient['product'];
        $dataCategory=$dataBodyClient['categories'];

        $category = Category::find($dataCategory['id']);
        $response =  $category->products()->create([
        'name'=>$dataProduct['name']]);

        return $response;

    }





    public function getProductsById($id){

        $products = Product::where('id', '=', $id)->get();
        //Para el O **orWere**
        return response()->json(['products' => $products], 200);
         
    } 

    public function create(Request $request){

        $products = new Product();
        $products->nombre = $request->nombre;
        $products->save();
        

        return $products;   
    } 

public function update(Request $request, $id){
    $products = Products::find($id);
    $products->nombre = $request->nombre;
    $products->save();
}  

public function destroy($id){
    $products = Products::find($id);
    $products->delete();
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */

}
