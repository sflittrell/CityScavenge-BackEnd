<?php

namespace App\Http\Controllers;

use App\Models\UserGroupHunt;
use App\Models\User;
use App\Models\Hunt;
use App\Models\Waypoint;
use App\Models\Clue;
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
        $userGroupHunt->user_id = $request->user()->id;
        $userGroupHunt->hunt_id = $request->hunt_id;

        $userGroupHunt->save();
        $tempGroupHunt = UserGroupHunt::find($userGroupHunt->id);
        // $tempGroupHunt = Hunt::where('id', $request->hunt_id)->get();
        return $tempGroupHunt;
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
        $hunt = UserGroupHunt::find($id);
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
    public function update(Request $request, $id)
    {
        $hunt = UserGroupHunt::find($id);
        $hunt->completed = $request->completed;
        $hunt->save();
        return $hunt;
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
