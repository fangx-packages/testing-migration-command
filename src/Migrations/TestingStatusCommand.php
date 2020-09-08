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

use Fangx\TestingMigrationCommand\TestingMigrator;
use Illuminate\Database\Console\Migrations\StatusCommand as IlluminateStatusCommand;

class TestingStatusCommand extends IlluminateStatusCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'testing-migrate:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the status of each migration';

    /**
     * Create a new migration rollback command instance.
     */
    public function __construct()
    {
        parent::__construct(TestingMigrator::getInstance());
    }
}
