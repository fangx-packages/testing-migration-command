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

use Fangx\TestingMigrationCommand\T;
use Illuminate\Database\Console\Migrations\StatusCommand as IlluminateStatusCommand;

class TestingStatusCommand extends IlluminateStatusCommand
{
    protected $name = 'testing-migrate:status';

    protected $description = 'Show the status of each migration';

    public function __construct()
    {
        parent::__construct(T::migrator());
    }
}
