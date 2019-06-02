<?php
namespace App\Helpers;

use Illuminate\Support\Carbon;

class DateToCarbon
{
    public static function process(string $date)
    {
        [$year, $month, $day] = explode('-', $date, 3);
        return Carbon::createFromDate($year, $month, $day);
    }
}
