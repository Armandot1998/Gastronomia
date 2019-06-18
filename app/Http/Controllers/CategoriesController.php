<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function getCategories(){

        $categories = Category::all();
        //Para el O **orWere**
        return response()->json(['Categories' => $categories], 200);
     
    } 

    public function CreateCategory1(Request $request){

        $categories = new Category();
        $categories->descripcion = $request->descripcion;
        $categories->save();
        

        return $categories;   
    } 

    public function CreateCategory(Request $request){



        return $request;
         
    } 


    public function update(Request $request, $id){
        $categories = Category::find($id);
        $categories->nombre = $request->nombre;
        $categories->save();
    } 
    
    public function updateCategory(Request $request){
        $category = Category::find($request->id);
        $response = $category->update(["descripcion"=>$request->descripcion]);

        return response()->json($response, 201);
        
    }
    
    public function destroyCategory($id){
        $categories =Category::find($id);
        $categories->delete();
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
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories)
    {
        //
    }
}
