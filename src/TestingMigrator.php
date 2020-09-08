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

use Illuminate\Database\Migrations\Migrator as IlluminateMigrator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;

class TestingMigrator extends IlluminateMigrator
{
    public function getMigrationFiles($paths)
    {
        return Collection::make($paths)->flatMap(function ($path) {
            return Str::endsWith($path, '.php') ? [$path] : $this->getFiles($path);
        })->filter()->values()->keyBy(function ($file) {
            return $this->getMigrationName($file);
        })->sortBy(function ($file, $key) {
            return $key;
        })->all();
    }

    private function getFiles($directory, $hidden = false)
    {
        $iterator = Finder::create()
            ->files()
            ->ignoreDotFiles(! $hidden)
            ->in($directory)
            ->sortByName()
            ->name('*.php');

        $files = [];
        foreach ($iterator as $key => $value) {
            $files[$key] = $value->getRealPath();
        }
        return $files;
    }
}
