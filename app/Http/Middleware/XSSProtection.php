<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class XSSProtection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                // Sanitize all inputs by removing harmful scripts
                $input = $request->all();
        
                array_walk_recursive($input, function(&$input) {
                    // Strip out HTML tags and encode entities to prevent XSS
                    $input = strip_tags($input);
                });
        
                // Replace the original request input with sanitized input
                $request->merge($input);
        
                return $next($request);
        
    }
}
