<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

        public function index()
    {
        $services = Service::all();
        return view('service.serviceindex', compact('services')); // ✅ Updated
    }

    public function create()
    {
        return view('service.servicecreate'); // ✅ Updated
    }

    public function edit($id)
{
    $service = Service::find($id); // Ensure karein ke $service define hua hai
    return view('service.serviceedit', compact('service'));
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability' => 'required',
            'location' => 'required',
        ]);

        $service = new Service($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }

        $service->save();
        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'duration' => 'nullable|string',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability' => 'required',
            'location' => 'required',
        ]);

        $service->fill($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }

        $service->save();
        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
}
