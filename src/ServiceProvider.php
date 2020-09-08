<?php

declare(strict_types=1);

/**
 * Fangx's Packages
 *
 * @link     https://nfangxu.com
 * @document https://pkg.nfangxu.com
 * @contact  nfangxu@gmail.com
 * @author   nfangxu
 * @license  https://pkg.nfangxu.com/license
 */

namespace Fangx\TestingMigrationCommand;

use Fangx\TestingMigrationCommand\Migrations\TestingFreshCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingInstallCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingMigrateCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingMigrateMakeCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingRefreshCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingResetCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingRollbackCommand;
use Fangx\TestingMigrationCommand\Migrations\TestingStatusCommand;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TestingFreshCommand::class,
                TestingInstallCommand::class,
                TestingMigrateCommand::class,
                TestingMigrateMakeCommand::class,
                TestingRefreshCommand::class,
                TestingResetCommand::class,
                TestingRollbackCommand::class,
                TestingStatusCommand::class,
            ]);
        }
    }
}
