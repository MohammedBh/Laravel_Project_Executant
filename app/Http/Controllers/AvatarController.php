<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();
        return view('pages.avatars.index', compact('avatars'));
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
        if (Avatar::all()->count() === 6) {
            return redirect()->back()->with('warning', "Vous ne pouvez ajouter qu'un maximum de 5 avatars.");
        } else {
            $store = new Avatar;
            Storage::put('public/img/', $request->file('src'));
            $store->name = $request->name;
            $store->src = $request->file('src')->hashName();
            $name = $request->name;
            $store->save();
            return redirect('/avatar')->with('success', $name . ' a été créé avec succès !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Avatar::find($id);
        foreach ($destroy->users as $user) {
            $user->avatar_id = 1;
            $user->save();
        }
        $name = $destroy->name;
        Storage::delete("public/img/".$destroy->src);
        $destroy->delete();
        return redirect('/avatar')->with('success', "L'avatar " . $name . " a été supprimé avec succès !");
    }
}
