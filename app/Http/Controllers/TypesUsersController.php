<?php

namespace App\Http\Controllers;

use App\type_user;
use Illuminate\Http\Request;

class TypesUsersController extends Controller
{

    public function CreateType_User(Request $request){

        $types_users = new Category();
        $types_users->name = $request->name;
        $types_users->description = $request->description;
        $types_userss->save();
        

        return $types_users;   
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\types_users  $types_users
     * @return \Illuminate\Http\Response
     */
    public function show(types_users $types_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\types_users  $types_users
     * @return \Illuminate\Http\Response
     */
    public function edit(types_users $types_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\types_users  $types_users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, types_users $types_users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\types_users  $types_users
     * @return \Illuminate\Http\Response
     */
    public function destroy(types_users $types_users)
    {
        //
    }
}
