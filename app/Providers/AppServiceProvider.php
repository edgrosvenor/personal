<?php

namespace App\Providers;

use App\Actions\MergeTailwindClasses;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Date::use(CarbonImmutable::class);

        Str::macro('tw', function ($base, $override) {
            return app(MergeTailwindClasses::class)($base, $override);
        });
    }
}
