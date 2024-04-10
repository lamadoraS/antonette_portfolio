<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $webinar = Webinar::get();
        return view('Webinar.index',compact('webinar'))->with('i');
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
        return view('Webinar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        Webinar::create($request->all());
        return redirect()->route('webinars.index');
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
    public function edit(Webinar $webinar)
    {
        //
        
         if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('Webinar.edit', compact('webinar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Webinar $webinar)
    {
        //
        $webinar->update($request->all());

        return redirect()->route('webinars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Webinar $webinar)
    {
        //
        $webinar->delete();
        return redirect()->route('webinars.index');
    }
}
