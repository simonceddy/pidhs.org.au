<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Support\Carbon;

class PastEventsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $events = Event::where('event_timestamp', '<', Carbon::now())
            ->orderBy('event_timestamp', 'desc')
            ->paginate(15);
        return view('event.index', [
            'title' => 'Past Events',
            'events' => $events,
            'linkUri' => route('event.upcoming'),
            'linkText' => 'View Upcoming Events'
        ]);
    }
}
