@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
<div class="m-2">
    <a href="{{session()->previousUrl()}}">Back to Events</a>
</div>
<div class="event-container">
    <h1 class="m-2">{{ $title }}</h1>
    <h3 class="m-2">{{$event_date}}</h3>
    <div class="m-2">
        {!!$content!!}
    </div>
</div>
@auth
    <div class="m-2">
        <a href="{{ route('event.edit', $id) }}" class="create-button">Edit Event</a>
    </div>
@endauth
@endsection
