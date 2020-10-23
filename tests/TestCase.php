<?php

<<<<<<< HEAD
namespace Spatie\LaravelDiskMonitor\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelDiskMonitor\LaravelDiskMonitorServiceProvider;
=======
namespace Spatie\Skeleton\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\Skeleton\SkeletonServiceProvider;
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
<<<<<<< HEAD
            fn (string $modelName) => 'Spatie\\LaravelDiskMonitor\\Database\\Factories\\'.class_basename($modelName).'Factory'
=======
            fn (string $modelName) => 'Spatie\\Skeleton\\Database\\Factories\\'.class_basename($modelName).'Factory'
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532
        );
    }

    protected function getPackageProviders($app)
    {
        return [
<<<<<<< HEAD
            LaravelDiskMonitorServiceProvider::class,
=======
            SkeletonServiceProvider::class,
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
<<<<<<< HEAD
        include_once __DIR__.'/../database/migrations/create_laravel_disk_monitor_table.php.stub';
=======
        include_once __DIR__.'/../database/migrations/create_skeleton_table.php.stub';
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532
        (new \CreatePackageTable())->up();
        */
    }
}
