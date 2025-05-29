<?php

namespace App\Http\Controllers;

use App\Models\PaintService;
use Illuminate\Http\Request;

class PaintServiceController extends Controller
{
    // Admin: List Paint Services
    public function index()
    {
        $services = PaintService::all();
        return view('paint_services.index', compact('services'));
    }

    // Admin: Show form to create new service
    public function create()
    {
        return view('paint_services.create');
    }

    // Admin: Store new service
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'color_name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'service_date' => 'required|date',
            'service_time' => 'required',
            'amount' => 'required|numeric',
            'advance' => 'nullable|numeric',
        ]);

        PaintService::create($request->all());

        return redirect()->route('paint-services.index')->with('success', 'Service created successfully.');
    }

    // Admin: Show edit form
    public function edit(PaintService $paintService)
    {
        return view('paint_services.edit', compact('paintService'));
    }

    // Admin: Update service
    public function update(Request $request, PaintService $paintService)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'color_name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'service_date' => 'required|date',
            'service_time' => 'required',
            'amount' => 'required|numeric',
            'advance' => 'nullable|numeric',
        ]);

        $paintService->update($request->all());

        return redirect()->route('paint-services.index')->with('success', 'Service updated successfully.');
    }

    // Admin: Delete service
    public function destroy(PaintService $paintService)
    {
        $paintService->delete();

        return redirect()->route('paint-services.index')->with('success', 'Service deleted successfully.');
    }

    // User side: Show services
    public function userServices()
    {
        $services = PaintService::all();
        return view('frontend.services', compact('services'));
    }
}
