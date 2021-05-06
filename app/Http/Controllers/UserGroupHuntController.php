<?php

namespace App\Http\Controllers;

use App\Models\UserGroupHunt;
use App\Models\User;
use App\Models\Hunt;
use Illuminate\Http\Request;

class UserGroupHuntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserGroupHunt::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $userGroupHunt = new UserGroupHunt;
        $userGroupHunt->user_id = $request->user_id;
        $userGroupHunt->hunt_id = $request->hunt_id;

        $userGroupHunt->save();
        return $userGroupHunt;
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
     * @param  \App\Models\UserGroupHunt  $userGroupHunt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hunt = UserGroupHunt::where('user_is', $id)->get();
        return $hunt;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserGroupHunt  $userGroupHunt
     * @return \Illuminate\Http\Response
     */
    public function edit(UserGroupHunt $userGroupHunt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserGroupHunt  $userGroupHunt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserGroupHunt $userGroupHunt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGroupHunt  $userGroupHunt
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserGroupHunt $userGroupHunt)
    {
        //
    }
}
