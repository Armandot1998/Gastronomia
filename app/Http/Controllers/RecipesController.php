<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recipe;
use App\Technique;

class RecipesController extends Controller
{
    public function getRecipes(){
        $recipes = Recipe::where('recipe_state', '=','Activo')->get();
        return response()->json(['Recipes' => $recipes], 200);
    }

    public function getRecipeById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataRecipe = $dataBodyClient['Recipe']; 
        $recipe = Recipe::findOrFail($dataRecipe['id']);
        return response()->json(['Recipe'=>$recipe],200);     
    } 

    public function postRecipes(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataRecipe=$dataBodyClient['Recipe'];
        $dataTechnique=$dataBodyClient['Technique'];
        $technique = Technique::findOrFail($dataTechnique['id']);
        $recipe = $technique->recipes()->create([
        'recipe_name'=>$dataRecipe['recipe_name'],
        'recipe_document_no'=>$dataRecipe['recipe_document_no'],
        'recipe_preparedness'=>$dataRecipe['recipe_preparedness'],
        'recipe_pax'=>$dataRecipe['recipe_pax'],
        'recipe_state'=>$dataRecipe['recipe_state']]);

        return 'Operation Sucssesfull!!'; 
    }

/*    public function postRecipes(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataRecipe=$dataBodyClient['Recipe'];
        $dataTechnique=$dataBodyClient['Technique'];
        $technique = Technique::find($dataTechnique['id']);
        $response =  $technique->recipes()->create([
        'recipe_name'=> $dataRecipe['recipe_name'],
        'recipe_document_no'=> $dataRecipe['recipe_document_no'],
        'recipe_preparedness'=> $dataRecipe['recipe_preparedness'],
        'recipe_pax'=> $dataRecipe['recipe_pax'],
        'recipe_state'=> $dataRecipe['recipe_state']]);
        return $response;
    }*/

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
