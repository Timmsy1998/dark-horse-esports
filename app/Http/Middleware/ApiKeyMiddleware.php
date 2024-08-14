<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');
        $validApiKey = App::environment('INTERNAL_API_KEY');

        if ($apiKey !== $validApiKey) {
            return response()->json(['error' => 'Invalid API key'], 403);
        }

        return $next($request);
    }
}
