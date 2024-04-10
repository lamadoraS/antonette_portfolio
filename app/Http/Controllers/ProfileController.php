<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profiles = Profile::get();
        return view('Profile.index',compact('profiles'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
       
        return view('Profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
       
        Profile::create($request->all());
        return redirect()->route('profiles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //

        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
       
       
        return view('Profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile): RedirectResponse
    {
        //
        
        $profile->update($request->all());

       return redirect()->route('profiles.index');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //
        
    }
}
