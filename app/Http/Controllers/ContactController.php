<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show all contacts
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contacts.index', compact('contacts'));
    }

    // Show form to add a new contact
    public function create()
    {
        return view('contacts.form');
    }

    // Store new contact
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Contact created successfully!');
    }

    // Show form to edit existing contact
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.form', compact('contact'));
    }

    // Update contact
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($validated);

        return redirect()->route('contact.index')->with('success', 'Contact updated successfully!');
    }

    // Delete contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully!');
    }


}
