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

use Fangx\TestingMigrationCommand\RenameCommand;
use Illuminate\Database\Console\Migrations\FreshCommand as IlluminateFreshCommand;

class TestingFreshCommand extends IlluminateFreshCommand
{
    use RenameCommand;

    protected $name = 'testing-migrate:fresh';

    protected $description = 'Drop all tables and re-run all migrations';
}
