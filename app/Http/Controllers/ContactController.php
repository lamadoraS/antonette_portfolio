<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
  
        return view('Contact.index', compact('contacts'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $contacts = new Contact();

        $contacts->first_name = $request->input('first_name');
        $contacts->last_name = $request->input('last_name');
        $contacts->email = $request->input('email');
        $contacts->message = $request->input('message');

        $contacts->save();

        return redirect('http://127.0.0.1:8000/');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        return view('Contact.view', compact('contact'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
  
        return redirect()->route('contacts.index');
    }
}
