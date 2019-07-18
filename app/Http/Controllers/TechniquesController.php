<?php

namespace App\Http\Controllers;

use App\Technique;
use Illuminate\Http\Request;

class TechniquesController extends Controller
{
    public function getTechniques(){
        $techniques = Technique::where('state', '=','active')->get();
        return response()->json(['techniques' => $techniques], 200);
    }

    public function getTechniqueById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique = $dataBodyClient['technique']; 
        $technique = Technique::findOrFail($dataTechnique['id']);
        return response()->json(['technique'=>$technique],200);     

    } 

    public function postTechniques(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique=$dataBodyClient['technique'];
        $technique= Technique::create([
            'name'=>$dataTechnique['name'],
            'state'=>$dataTechnique['state']]);
        return response()->json(['technique'=>$technique],200);
    } 
    
    public function putTechnique(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique = $dataBodyClient['technique']; 
        $technique = Technique::find($dataTechnique['id']);
        $technique->update([
            'name'=>$dataTechnique['name'],
            'state'=>$dataTechnique['state']]);
        return response()->json($technique  , 201); 
    }

    public function deleteTechnique(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique = $dataBodyClient['technique']; 
        $technique = Technique::find($dataTechnique['id']);
        $technique->update([
            'state'=>$dataTechnique['state']]);
        return response()->json($technique  , 201); 
    }
}
