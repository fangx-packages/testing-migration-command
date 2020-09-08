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

use Illuminate\Support\Str;

trait RenameCommand
{
    public function call($command, ...$args)
    {
        if (Str::startsWith($command, ['migrate', 'migration'])) {
            $command = 'testing-' . $command;
        }

        return parent::call($command, ...$args);
    }

    public function artisan($command, ...$args)
    {
        if (Str::startsWith($command, ['migrate', 'migration'])) {
            $command = 'testing-' . $command;
        }

        return parent::artisan($command, ...$args);
    }
}
