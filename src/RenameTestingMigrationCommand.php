<?php
declare(strict_types=1);

namespace Fangx\TestingMigrationCommand;

use Illuminate\Support\Str;

trait RenameTestingMigrationCommand
{
    public function call($command, array $arguments = [])
    {
        if (Str::startsWith($command, ['migrate', 'migration'])) {
            $command = 'testing-' . $command;
        }

        return parent::call($command, $arguments);
    }
}
