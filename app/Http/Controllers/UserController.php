<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Image; // Ensure this line is included
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Category;



class UserController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::where('is_approved', true)->get(); // ✅ Only approved feedbacks
        return view('layouts.user.userindex', compact('feedbacks'));
    }
    

    public function about()
    {
        return view('layouts.user.about');
    }

    public function gallery() // Use lowercase 'g'
    {
        $images = Image::all(); // Fetch all images from the database
        return view('layouts.user.gallery', compact('images')); // Ensure gallery view path is correct
    }       


        public function Collection()
    {
        // Your logic here
        return view('Layouts.user.collection'); // Ensure this view exists or change accordingly
    }

    // public function service()
    // {
    //     $services = Service::all();

    //  return view('layouts.user.service' , compact('services')); // ✅ View ko data pass kar raha hai
    // }
public function service()
{
    $categories = Category::all(); // Or whatever logic you use to get the categories

    return view('layouts.User.service', compact('categories'));
}

    

    public function contact()
    {
        return view('layouts.user.contact');
    }

    public function feedback()
    {
        return view('layouts.user.feedback');
    }

    
    public function frontendVideos()
    {
        return view('layouts.user.frontend-videos');
    }


    
}
