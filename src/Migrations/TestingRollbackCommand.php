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
use Illuminate\Database\Console\Migrations\RollbackCommand as IlluminateRollbackCommand;

class TestingRollbackCommand extends IlluminateRollbackCommand
{
    protected $name = 'testing-migrate:rollback';

    protected $description = 'Rollback the last database migration';

    public function __construct()
    {
        parent::__construct(T::migrator());
    }
}
