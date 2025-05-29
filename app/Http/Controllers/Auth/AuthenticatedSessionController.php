<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
    
        $userRole = Auth::user()->Role;
    
        // Check if the user is admin
        if ($userRole === 'admin') {
            return redirect()->route('Userindex');  // Admin ko dashboard par redirect
        }
    
        // For other roles (like user), redirect as needed
        if ($userRole === 'user') {
            return redirect()->route('Userindex');  // User ko home page ya user index par redirect
        }
    
        return redirect()->route('login');  // Agar koi aur role hai, login page par redirect
    }
    
    
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('user/Userindex');
    }
}
