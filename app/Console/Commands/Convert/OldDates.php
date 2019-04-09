<?php

namespace App\Console\Commands\Convert;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class OldDates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:olddates {--T|table=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        if ($table = $this->option('table')) {
            $articles = DB::table($table)->get(['id', 'publicationDate']);
            dd($articles);
        }
    }
}
