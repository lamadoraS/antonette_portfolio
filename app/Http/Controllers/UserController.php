<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user =  User::get(); 
        return view('User.index', compact('user'))->with('i');
    
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
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        User::create($request->all());
        return view('User.index');
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
    public function edit(User $user)
{
    $authenticatedUser = auth()->user();

   
    if ($authenticatedUser->role == 'spectator') {
       
        if ($authenticatedUser->id != $user->id) {
            abort(403, 'Forbidden');
        }
    } 

    return view('User.edit', compact('user'));
}


  
    public function update(Request $request, User $user): RedirectResponse
    {
       $data =  $request->validate([
           
            'email' => 'required',
            'password' => 'nullable|string|min:8|confirmed',
         
        ]);
       
        $user->update($data);
    
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('users.index');

    }
}
