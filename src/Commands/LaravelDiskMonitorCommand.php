<?php

<<<<<<< HEAD:src/Commands/LaravelDiskMonitorCommand.php
namespace Spatie\LaravelDiskMonitor\Commands;

use Illuminate\Console\Command;

class LaravelDiskMonitorCommand extends Command
{
    public $signature = 'laravel-disk-monitor';
=======
namespace Spatie\Skeleton\Commands;

use Illuminate\Console\Command;

class SkeletonCommand extends Command
{
    public $signature = 'skeleton';
>>>>>>> 9ca08d08cb8a4fa43ccb4622ec4166a7b32c2532:src/Commands/SkeletonCommand.php

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
