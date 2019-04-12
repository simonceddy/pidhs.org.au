<?php

namespace App\Console\Commands\Convert;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Dates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:dates {--T|table=}';

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
            foreach ($articles as $article) {
                $created_at = $this->convertDate($article->publicationDate);
                DB::table($table)
                    ->where('id', $article->id)
                    ->update(['created_at' => $created_at]);
            }
        }
    }

    private function convertDate(string $date)
    {
        [$year, $month, $day] = explode('-', $date, 3);
        return Carbon::createFromDate($year, $month, $day);
    }
}
