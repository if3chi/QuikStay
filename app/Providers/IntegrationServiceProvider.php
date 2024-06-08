<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JustSteveKing\Ollama\SDK;

class IntegrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(
            abstract: SDK::class,
            concrete: fn () => (new SDK(
                apiToken: '',
                url: 'http://localhost:11434')
            )->setup()
        );
    }
}
