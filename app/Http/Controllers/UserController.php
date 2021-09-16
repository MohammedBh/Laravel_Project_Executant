<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only(['index', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $avatars = Avatar::all();
        return view('pages.users.index', compact('users', 'avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $avatars = Avatar::all();
        $roles = Role::all();
        return view('pages.users.edit', compact('users', 'avatars', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = User::find($id);
        $update->name = $request->name;
        $update->lastname = $request->lastname;
        $update->age = $request->age;
        $update->avatar_id = $request->avatar_id;
        $update->role_id = $request->role_id;
        $update->email = $request->email;
        $update->save();
        return redirect('/users')->with('success', 'Profile mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = User::find($id);
        $destroy->delete();
        $name = $destroy->name;
        return redirect('/users')->with('success', $name . ' a été supprimé avec succès !');
    }
}
