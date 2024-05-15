<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\EmployeeRepository;
use App\Repositories\EmployeeMapping;
use AutoMapperPlus\AutoMapper;
use AutoMapperPlus\Configuration\AutoMapperConfig;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);

        $this->app->singleton(AutoMapperConfig::class, function ($app) {
            $config = new AutoMapperConfig();
            EmployeeMapping::configure($config);
            return $config;
        });

        $this->app->singleton(AutoMapper::class, function ($app) {
            return new AutoMapper($app->make(AutoMapperConfig::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
