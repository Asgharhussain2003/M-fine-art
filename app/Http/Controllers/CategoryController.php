<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of all categories.
     */
    public function index()
    {
        $categories = Category::latest()->get(); // Get all categories (latest first)
        return view('admin.category', compact('categories'));
    }

    /**
     * Store a newly created category in the database.
     */
    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name'       => 'required|string|max:255',
            'date'       => 'required|date',
            'time'       => 'required',
            'location'   => 'required|string|max:255',
            'amount'     => 'required|numeric',
            'paint_type' => 'required|string|max:255',
        ]);

        // // Store new category
        // Category::create($request->all());

        // // Redirect back with a success message
        // return redirect()->back()->with('success', 'Category saved successfully!');

        ServiceCollection::create($validated);

    // Set flash message for toast
    return redirect()->back()->with('success', 'Your data is submitted, the admin will connect soon.');
}
    }


