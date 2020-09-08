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
use Illuminate\Database\Console\Migrations\RefreshCommand as IlluminateRefreshCommand;

class TestingRefreshCommand extends IlluminateRefreshCommand
{
    use RenameCommand;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'testing-migrate:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset and re-run all migrations';
}
