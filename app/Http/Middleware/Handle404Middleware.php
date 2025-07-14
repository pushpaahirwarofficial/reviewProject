<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Handle404Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            // Continue processing the request
            return $next($request);
        } catch (NotFoundHttpException $e) {
            // Handle 404 - Page Not Found
            return response()->view('errors.404', [], 404);
        }

    }
}
