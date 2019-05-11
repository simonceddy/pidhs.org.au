@extends('layout')

@section('title', $title ?? 'Events')

@section('content')

<h1 class="m-2">{{$title ?? 'Events'}}</h1>

@auth
<div class="admin-row">
    @createButton(['action' => route('event.create'), 'label' => 'Create a new Event'])
</div>
@endauth

<div class="m-2">
    <a class="link" href="{{$linkUri ?? route('event.upcoming')}}">{{$linkText ?? 'Upcoming Events'}}</a>
</div>

<div class="events-container mx-2">
    {{ $events->links() }}
    @foreach ($events as $event)
    <div class="my-3">
        <div class="flex flex-row items-center">
            <span class="event-list-date text-sm">{{$event->event_date}}</span>
            <a href="{{route('event.show', $event->id)}}" class="no-underline hover:underline"><h1 class="heading m-2">{{$event->title}}</h1></a>
            
        </div>
    </div>
    @endforeach
    {{ $events->links() }}
</div>

@auth
<div class="admin-row">
@createButton(['action' => route('event.create'), 'label' => 'Create a new Event'])
</div>
@endauth

@endsection
