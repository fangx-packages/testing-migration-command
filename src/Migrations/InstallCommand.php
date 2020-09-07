<?php

namespace Fangx\TestingMigrationCommand\Migrations;

use Illuminate\Database\Console\Migrations\InstallCommand as IlluminateInstallCommand;

class InstallCommand extends IlluminateInstallCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'testing-migrate:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the testing migration repository';
}
