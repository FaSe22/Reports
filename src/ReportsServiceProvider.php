<?php

namespace Fase22\Reports;

use Fase22\Reports\Commands\ReportsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ReportsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('reports')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_reports_table')
            ->hasCommand(ReportsCommand::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
