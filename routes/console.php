<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

Artisan::command('api:generate-key', function () {
    $apiKey = bin2hex(random_bytes(32));

    $path = base_path('.env');

    if (File::exists($path)) {
        $env = File::get($path);
        $env = preg_replace('/^INTERNAL_API_KEY=.*/m', '', $env);
        $env .= "\nINTERNAL_API_KEY={$apiKey}\n";
        $env = preg_replace('/^VITE_INTERNAL_API_KEY=.*/m', '', $env);
        $env .= "\nVITE_INTERNAL_API_KEY={$apiKey}\n";
        File::put($path, $env);
    }

    $this->info('Internal API Key Has Been generated successfully.');
})->describe('Generate a random API Key and store it in the .env for secure API Calls');
