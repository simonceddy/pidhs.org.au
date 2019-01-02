@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    <div class="container">
@foreach ($events as $event)
        <div class="row my-3">
        <a href="{{route('event.show', $event->id)}}"><h3>{{$event->title}}</h3></a>
            <p>{{$event->event_date}}</p>
        </div>
@endforeach
    </div>
@endsection
