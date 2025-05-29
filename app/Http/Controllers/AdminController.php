<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Feedback;


class AdminController extends Controller
{
    // Method for showing the list of users (Admin Dashboard)
    public function admin()
    {
        // Fetch all registered users except those with the 'admin' role
        $users = User::where('Role', '!=', 'admin')->get();

        // Pass users data to the dashboard view
        return view('layouts.Admindashboard', compact('users'));
    }

    // Method for showing the user creation form
    public function usercreate()
    {
        return view('layouts.admin.users.usercreate'); // Ensure this view file exists
    }

    public function images()
    {
        return view('layouts.admin.create');
    }
    // Method for storing a new user
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'Role' => 'user', // Set the role to 'user' or any other role if needed
        ]);

        // Redirect to the user list with a success message
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    // Method for showing the form to edit a user
    public function edit($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Pass the user data to the edit view
        return view('layouts.admin.users.edit', compact('user')); // Ensure the view path is correct
    }

    // Method for updating a user
    public function update(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed', // Password is optional
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Update password only if it's provided
        if ($request->filled('password')) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        // Redirect to the user list with a success message
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    // Method for deleting a user
    public function destroy($id)
    {
        // Find the user by ID and delete them
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect to the user list with a success message
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    // Contact Management // 

    // Method for showing contact messages
    public function storeContact(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^[0-9\-\+]{9,15}$/',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        // Store the validated data into the 'contacts' table
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'is_read' => false,
        ]);
    
        // Return success response as a redirect
        return redirect()->back()->with('success', 'Your message has been sent successfully. We will contact you soon.');
    }
    // Method for updating a contact message status to read
    public function updateContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = true;
        $contact->save();

        // Redirect with a success message
        return redirect()->route('admin.contacts')->with('success', 'Contact message marked as read.');
    }

    // Method for deleting a contact message
    public function destroyContact($id)
    {
        // Find the contact by ID and delete it
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect with a success message
        return redirect()->route('admin.contacts')->with('success', 'Contact message deleted successfully.');
    }

    // Method to display contact messages in the admin dashboard
    public function table()
    {
        // Retrieve contact messages from the database
        $contacts = Contact::all();

        // Pass data to the view
        return view('layouts.admin.table', compact('contacts'));
    }
    
    public function index()
    {
        $feedbacks = Feedback::all(); // ✅ Database se feedbacks fetch karein
        return view('layouts.admin.feedbacks', compact('feedbacks')); // ✅ View return karein
    }
    
    
}