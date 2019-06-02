<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;
use Illuminate\Support\Carbon;

class ConvertEventDates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:eventdates';

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
        $events = Event::all(['id', 'event_date']);
        foreach ($events as $event) {
            $event->event_timestamp = $this->convertDate($event->event_date);
            $event->save();
            dump($event->event_timestamp);
        }
    }

    private function convertDate(string $date)
    {
        [$year, $month, $day] = explode('-', $date, 3);
        return Carbon::createFromDate($year, $month, $day);
    }
}
