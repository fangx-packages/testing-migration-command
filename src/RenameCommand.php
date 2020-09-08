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
    public function call($command, array $arguments = [])
    {
        if (Str::startsWith($command, ['migrate', 'migration'])) {
            $command = 'testing-' . $command;
        }

        return parent::call($command, $arguments);
    }

    public function artisan($command, $parameters = [])
    {
        if (Str::startsWith($command, ['migrate', 'migration'])) {
            $command = 'testing-' . $command;
        }

        return parent::artisan($command, $parameters);
    }
}
