@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    @auth
        <div>
            <a href="{{ route('event.edit', $id) }}" class="create-button">Edit Event</a>
        </div>
    @endauth
    <div class="m-2">
        <a href="{{route('event.upcoming')}}">Back to Events</a>
    </div>
    <div class="event-container">
        <h1 class="m-2">{{ $title }}</h1>
        <h3 class="m-2">{{$event_date}}</h3>
        <div class="m-2">
            {{ $content }}
        </div>
    </div>
@endsection
