<?php

<<<<<<< HEAD:src/LaravelDiskMonitorServiceProvider.php
namespace Spatie\LaravelDiskMonitor;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelDiskMonitor\Commands\LaravelDiskMonitorCommand;

class LaravelDiskMonitorServiceProvider extends ServiceProvider
=======
namespace Spatie\Skeleton;

use Illuminate\Support\ServiceProvider;
use Spatie\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends ServiceProvider
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532:src/SkeletonServiceProvider.php
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
<<<<<<< HEAD:src/LaravelDiskMonitorServiceProvider.php
                __DIR__ . '/../config/laravel-disk-monitor.php' => config_path('laravel-disk-monitor.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-disk-monitor'),
            ], 'views');

            $migrationFileName = 'create_laravel_disk_monitor_table.php';
=======
                __DIR__ . '/../config/skeleton.php' => config_path('skeleton.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/skeleton'),
            ], 'views');

            $migrationFileName = 'create_skeleton_table.php';
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532:src/SkeletonServiceProvider.php
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
<<<<<<< HEAD:src/LaravelDiskMonitorServiceProvider.php
                LaravelDiskMonitorCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-disk-monitor');
=======
                SkeletonCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'skeleton');
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532:src/SkeletonServiceProvider.php
    }

    public function register()
    {
<<<<<<< HEAD:src/LaravelDiskMonitorServiceProvider.php
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-disk-monitor.php', 'laravel-disk-monitor');
=======
        $this->mergeConfigFrom(__DIR__ . '/../config/skeleton.php', 'skeleton');
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532:src/SkeletonServiceProvider.php
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
