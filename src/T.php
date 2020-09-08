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

use Illuminate\Container\Container;

class T
{
    public static function app($abstract, $parameters = [])
    {
        if (is_null($abstract)) {
            return Container::getInstance();
        }

        return Container::getInstance()->make($abstract, $parameters);
    }

    public static function migrator()
    {
        return new TestingMigrator(
            T::app('migration.repository'),
            T::app('db'),
            T::app('files'),
            T::app('events')
        );
    }

    public static function migrationRepository()
    {
        return T::app('migration.repository');
    }

    public static function migrationCreator()
    {
        return T::app('migration.creator');
    }
}
