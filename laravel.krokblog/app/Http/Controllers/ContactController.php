<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.index');
    }

    public function store(Request $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $contact->save();
        return redirect()->route('contacts')->with('success', 'Contact created successfully.');
    }
}