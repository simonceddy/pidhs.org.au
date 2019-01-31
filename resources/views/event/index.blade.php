@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    <h1>Events</h1>

    <div class="container">
        @auth
            <div>
                <a href="{{ route('event.create') }}" class="create-button">Create a new Event</a>
            </div>
        @endauth
@foreach ($events as $event)
        <div class="row my-3">
        <a href="{{route('event.show', $event->id)}}"><h3>{{$event->title}}</h3></a>
            <p>{{$event->event_date}}</p>
        </div>
@endforeach
    </div>
@endsection
