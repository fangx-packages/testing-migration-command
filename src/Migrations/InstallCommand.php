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

namespace Fangx\TestingMigrationCommand\Migrations;

use Illuminate\Database\Console\Migrations\InstallCommand as IlluminateInstallCommand;

class InstallCommand extends IlluminateInstallCommand
{
    protected $name = 'testing-migrate:install';

    protected $description = 'Create the testing migration repository';
}
