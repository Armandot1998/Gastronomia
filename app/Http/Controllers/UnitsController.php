<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    public function getUnits(){
        $units = Unit::where('state', '=','active')->get();;
        return response()->json(['units' => $units], 200);
    }
    
    public function getUnitById(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataUnit = $dataBodyClient['unit']; 
        $unit = Unit::findOrFail($dataUnit['id']);
        return response()->json(['unit'=>$unit],200);     
    } 

    public function postUnits(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataUnit=$dataBodyClient['unit'];
        $unit= Unit::create([
            'name'=>$dataUnit['name'],
            'quantity'=>$dataUnit['quantity'],
            'state'=>$dataUnit['state']]);
        return response()->json(['unit'=>$unit],200);
    } 
    
    public function putUnit(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataUnit = $dataBodyClient['unit']; 
        $unit = Unit::findOrFail($dataUnit['id']);
        $unit->update([
            'name'=>$dataUnit['name'],
            'quantity'=>$dataUnit['quantity'],
            'state'=>$dataUnit['state']]);
        return response()->json($unit, 201); 
    }

    public function deleteUnit(Request $request){
        $dataBodyClient = $request->json()->all();
        $dataUnit = $dataBodyClient['unit']; 
        $unit = Unit::findOrFail($dataUnit['id']);
        $unit->update([
            'state'=>$dataUnit['state']]);
        return response()->json($unit, 201); 
    }

}
