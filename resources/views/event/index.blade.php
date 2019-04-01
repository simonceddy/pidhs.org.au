@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    <h1 class="m-2">{{$title ?? 'Events'}}</h1>

    @if ($linkUri && $linkText)
        <div>
            <a href="{{$linkUri}}">{{$linkText}}</a>
        </div>
    @endif

    <div class="events-container">
        @auth
            <div>
                <a href="{{ route('event.create') }}" class="create-button">Create a new Event</a>
            </div>
        @endauth
@foreach ($events as $event)
    <div class="my-3">
        <div class="flex flex-row items-center">
            <span class="event-list-date text-sm">{{$event->event_date}}</span>
            <a href="{{route('event.show', $event->id)}}" class="no-underline hover:underline"><h1 class="m-2">{{$event->title}}</h1></a>
            
        </div>
    </div>
@endforeach
    </div>
@endsection
