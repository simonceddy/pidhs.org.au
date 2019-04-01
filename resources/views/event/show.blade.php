@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    @auth
        <div>
            <a href="{{ route('event.edit', $id) }}" class="create-button">Edit Event</a>
        </div>
    @endauth
    <div class="event-container">
        <h1 class="m-2">{{ $title }}</h1>
    </div>
@endsection
