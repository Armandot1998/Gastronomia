<?php

namespace App\Http\Controllers;

use App\Process;
use App\Recipe;
use Illuminate\Http\Request;

class ProcessesController extends Controller
{
    public function getProcesses(){
        $processes = Process::where('state', '=','active')->get();
        return response()->json(['Process' => $processes], 200);
    }

    public function getProcesseById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProcess = $dataBodyClient['process']; 
        $process = Process::findOrFail($dataProcess['id']);
        return response()->json(['process'=>$process],200);       
    } 

    public function postProcesses(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataProcess=$dataBodyClient['process'];
        $dataRecipe=$dataBodyClient['recipe'];
        $recipe = Recipe::find($dataRecipe['id']);
        $response =  $recipe->process()->create([
        'description'=>$dataProcess['description'],
        'order'=>$dataProcess['order'],
        'state'=>$dataProcess['state']]);
        return $response;
    }
    
    public function putProcesse(Request $request, $id){
        $process = Process::find($id);
        $response = $process->update([
            "description"=>$request->description,
            "order"=>$request->order, 
            "isactive"=>$request->isactive]);
        return response()->json($response, 201); 
    }
}
