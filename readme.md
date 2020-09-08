## Fangx's Packages

> Laravel 默认的迁移命令只能执行第一层目录下的迁移文件, 本扩展支持多层目录
> 应用场景是在进行单元测试的时候, 可以自动执行所有的迁移文件

### Install

Via Composer

```
composer require fangx/testing-migration-command --dev
```

### Usage

在所有的 migrate 命令前加上 `testing-` 即可调用本扩展改写的 migrate 命令, 如: 

```
php artisan testing-migrate
php artisan testing-migrate:rollback
```

在 tests/TestCase.php 中添加以下代码, 自动替换单测中的 migrate 相关命令

```php
namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Str;

abstract class TestCase extends BaseTestCase
{
    // ...others

    public function artisan($command, $parameters = [])
    {
        if (Str::startsWith($command, ['migrate', 'migration'])) {
            $command = 'testing-' . $command;
        }

        return parent::artisan($command, $parameters);
    }
}
```