<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsLoggout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // If the current route is restricted (e.g., 'login' or 'register'), redirect them
            if ($request->routeIs('signin', 'signup')) {
                return redirect()->route('userDashboard');  // Redirect authenticated users to the dashboard or any other route
            }
        }

        return $next($request);
    }
}
