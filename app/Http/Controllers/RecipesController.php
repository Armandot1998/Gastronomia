<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Technique;

class RecipesController extends Controller
{
    public function getRecipes(){
        $recipes = Recipe::where('state', '=','active')->get();
        return response()->json(['recipes' => $recipes], 200);
    }

    public function getRecipeById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataRecipe = $dataBodyClient['recipe']; 
        $recipe = Recipe::findOrFail($dataRecipe['id']);
        return response()->json(['recipe'=>$recipe],200);     
    } 

    public function postRecipes(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataRecipe=$dataBodyClient['recipe'];
        $dataTechnique=$dataBodyClient['technique'];
        $technique = Technique::find($dataTechnique['id']);
        $response =  $technique->recipes()->create([
        'name'=> $dataRecipe['name'],
        'document_no'=> $dataRecipe['document_no'],
        'preparedness'=> $dataRecipe['preparedness'],
        'pax'=> $dataRecipe['pax'],
        'state'=> $dataRecipe['state']]);
        return $response;
    }

    public function putRecipe(Request $request, $id){
        $recipe = Recipe::find($id);
        $response = $recipe->update([
            "name"=>$request->name,
            "document_no"=>$request->document_no,
            "preparedness"=>$request->preparedness,
            "pax"=>$request->pax,
            "isactive"=>$request->isactive,
            "category_id"=>$request->category_id]);
        return response()->json($response, 201); 
    }


}
