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
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $data = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'age' => 'required',
            'degree' => 'required',
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }
        
        Profile::create($data);
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
        $data = $request->validate([
            'title' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'age' => 'required',
            'degree' => 'required',
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }
        $profile->update($data);

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
