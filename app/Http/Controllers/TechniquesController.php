<?php

namespace App\Http\Controllers;

use App\Technique;
use Illuminate\Http\Request;

class TechniquesController extends Controller
{
    public function getTechniques(){
        $techniques = Technique::where('technique_state', '=','Activo')->get();
        return response()->json(['Techniques' => $techniques], 200);
    }

    public function getTechniqueById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique = $dataBodyClient['Technique']; 
        $technique = Technique::findOrFail($dataTechnique['id']);
        
        return response()->json(['Technique'=>$technique],200);     

    } 

    public function postTechniques(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique=$dataBodyClient['Technique'];
        $technique= Technique::create([
            'technique_name'=>$dataTechnique['technique_name'],
            'technique_state'=>$dataTechnique['technique_state']]);

        return 'Operation Sucssesfull!!'; 
    } 
    
    public function putTechnique(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique = $dataBodyClient['Technique']; 
        $technique = Technique::find($dataTechnique['id']);
        $technique->update([
            'technique_name'=>$dataTechnique['technique_name'],
            'technique_state'=>$dataTechnique['technique_state']]);

        return 'Operation Sucssesfull!!';  
    }

    public function deleteTechnique(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataTechnique = $dataBodyClient['Technique']; 
        $technique = Technique::find($dataTechnique['id']);
        $technique->update([
            'technique_state'=>$dataTechnique['technique_state']]);

        return 'Operation Sucssesfull!!';  
    }
}
