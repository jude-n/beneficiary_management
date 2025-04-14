<?php

namespace App\Providers;

use App\Domain\Repositories\IBeneficiaryRepository;
use App\Domain\Services\BeneficiaryService;
use App\Domain\Services\IBeneficiaryService;
use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            IBeneficiaryRepository::class, \App\Infrastructure\Repositories\BeneficiaryRepository::class
        );

        $this->app->bind(
            IBeneficiaryService::class,BeneficiaryService::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
