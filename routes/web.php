<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('api.key')->prefix('api')->group(function () {
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

    Route::prefix('auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });

    Route::prefix('users')->group(function () {
        Route::get('/', [AuthController::class, 'index']);
        Route::post('/', [AuthController::class, 'store']);
        Route::get('/{user}', [AuthController::class, 'show']);
        Route::put('/{user}', [AuthController::class, 'update']);
        Route::delete('/{user}', [AuthController::class, 'destroy']);
    });
});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
