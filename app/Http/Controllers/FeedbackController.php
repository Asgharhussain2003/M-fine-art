<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->rating = $request->rating;
        $feedback->is_approved = false; // Default false (admin will approve)

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('feedback_photos', 'public');
            $feedback->photo = $photoPath;
        }

        $feedback->save();

        return redirect()->back()->with('success', 'Feedback submitted successfully! It will be shown after approval.');
    }

    public function approve($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->is_approved = true;
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback approved successfully!');
    }

    // New method to show approved feedbacks on userindex page
    public function userIndex()
    {
        $feedbacks = Feedback::where('is_approved', true)->get();
        return view('userindex', compact('feedbacks'));
    }
    public function destroy($id)
{
    $feedback = Feedback::findOrFail($id);

    // Agar feedback ke sath photo bhi hai to usko bhi delete karo
    if ($feedback->photo && \Storage::exists($feedback->photo)) {
        \Storage::delete($feedback->photo);
    }

    $feedback->delete();

    return redirect()->back()->with('success', 'Feedback deleted successfully.');
}

}
