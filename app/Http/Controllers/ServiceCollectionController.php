<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCollection;

class ServiceCollectionController extends Controller
{
    // Show the form
    public function create()
    {
        return view('layouts.user.many');
    }

    // Store form data
    public function store(Request $request)
    {
        // Validate the request (optional but recommended)
        $validated = $request->validate([
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'expected_date' => 'required|date_format:Y-m',
            'house_size'    => 'required|string',
            'time'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required|string|max:20',
            'city'          => 'required|string|max:255',
            'amount'        => 'required|string|max:50',
            'paint_type'    => 'required|string',
        ]);

        // Save validated data to the database
        ServiceCollection::create($validated);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Category saved successfully!');
    }

    // List all service collections
    public function index()
    {
        $services = ServiceCollection::latest()->get(); // fixed variable name
        return view('layouts.admin.many', compact('services'));
    }

    // Delete service collection entry
    public function deleteService($id)
    {
        $service = ServiceCollection::findOrFail($id); // fixed model name
        $service->delete();

        return redirect()->back()->with('success', 'Service record deleted successfully.');
    }
}
