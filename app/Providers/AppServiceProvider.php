<?php

namespace App\Providers;

use App\Jobs\ExampleJob;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        app()->bind(ExampleJob::class. '@handle', fn($job) => $job->handle());
    }
}
