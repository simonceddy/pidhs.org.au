@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    @auth
        <div>
            <a href="{{ route('event.edit', $id) }}" class="create-button">Edit Event</a>
        </div>
    @endauth
    <div class="event-container">
        <h2>{{ $title }}</h2>
    </div>
@endsection
