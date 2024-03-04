<?php

namespace Metin;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../lang/' => lang_path()
        ], 'laravel-turkce');
    }
}
