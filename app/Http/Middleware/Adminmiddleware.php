<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
     
     public function handle(Request $request, Closure $next)
{
    if (Auth::check() && Auth::user()->Role === 'admin') {
        return $next($request);
    }
    return redirect()->route('Admindashboard'); // Ensure redirection is correctly handled.
}

}