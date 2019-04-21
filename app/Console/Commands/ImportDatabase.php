<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import database from latest backup.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = storage_path('backup');
        if (!is_dir($path)) {
            return $this->error('Cannot locate backup directory');
        }
        $files = scandir($path);
        $path = $path.'/'.array_pop($files);
        if (!file_exists($path)) {
            return $this->error('Cannot locate backup file');
        }
        $process = new Process(sprintf(
            'mysql -u %s -p %s %s < %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            $path
        ));
        try {
            $process->mustRun();
        } catch (ProcessFailedException $e) {
            return $this->error($e->getMessage());
        }
        return $this->info('Database imported successfully from '.$path);
    }
}
