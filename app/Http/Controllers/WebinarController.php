<?php

namespace App\Http\Controllers;

use App\Models\webinar;
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
        $webinar = webinar::get();
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
        return view('webinar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        webinar::create($request->all());
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
    public function edit(webinar $webinar)
    {
        //
        
         if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('webinar.edit', compact('webinar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, webinar $webinar)
    {
        //
        $webinar->update($request->all());

        return redirect()->route('webinars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(webinar $webinar)
    {
        //
        $webinar->delete();
        return redirect()->route('webinars.index');
    }
}
