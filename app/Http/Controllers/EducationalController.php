<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $education = Education::get();
        return view('Educational.index',compact('education'))->with('i');
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
        return view('educational.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
       
        Education::create($request->all());
        return redirect()->route('education.index');
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
    public function edit(Education $education)
    {
        //
        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('educational.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education): RedirectResponse
    {
        //
        $education->update($request->all());

        return redirect()->route('education.index');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
        $education->delete();
        return redirect()->route('education.index');
    }
}
