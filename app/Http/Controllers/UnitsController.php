<?php

namespace App\Http\Controllers;

use App\unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{

    public function createUnit(Request $request){

        $units = new unit();
        $units->name = $request->name;
        $units->quantity = $request->quantity;
        $units->save();
        

        return $products;   
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
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function show(units $units)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, units $units)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy(units $units)
    {
        //
    }
}
