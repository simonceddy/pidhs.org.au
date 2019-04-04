<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DumpDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dump:database {--O|output=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the database to SQL';

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
        $fn = $this->option('output') ?? $this->defaultFileName();
        $path = storage_path('backup');
        if (!is_dir($path)) {
            mkdir($path);
        }  
        $path .= '/'.$fn;
        //dd(config('database.connections.mysql.username'));
        $process = new Process(sprintf(
            'mysqldump -u %s -p %s %s > %s',
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
        $this->info('Database exported successfully to '.$path);
    }

    private function defaultFileName(): string
    {
        return Carbon::now()->getTimestamp().'_pidhsorg.sql';
    }
}
