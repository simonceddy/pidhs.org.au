@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    <h1>Events</h1>

    <div class="events-container">
        @auth
            <div>
                <a href="{{ route('event.create') }}" class="create-button">Create a new Event</a>
            </div>
        @endauth
@foreach ($events as $event)
        <div class="row my-3">
        <a href="{{route('event.show', $event->id)}}"><h2 class="m-2">{{$event->title}}</h1></a>
            <p>{{$event->event_date}}</p>
        </div>
@endforeach
    </div>
@endsection
