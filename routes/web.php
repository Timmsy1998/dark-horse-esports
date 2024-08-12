<?php

use Illuminate\Support\Facades\Route;

// Overall API Routes
// MUST BE PLACED ABOVE THE WEB ROUTES OR THEY WILL BE IGNORED AND PASSED THROUGH THE VUE ROUTER!!!!
Route::prefix('api')->group(function () {
    Route::get('/', function () {
        $welcomeMessage = 'Welcome to the Dark Horse API';

        $routes = collect(Route::getRoutes())->filter(function ($route) {
            return Str::startsWith($route->uri, 'api');
        });

        $routeList = $routes->map(function ($route) {
            return $route->uri;
        })->toArray();

        return response()->json([
            'Hi there' => $welcomeMessage,
            'Endpoints' => $routeList,
        ]);
    });
});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

Auth::routes();
