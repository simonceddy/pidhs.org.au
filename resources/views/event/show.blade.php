@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
<div class="m-2">
    <a class="link" href="{{route('event.upcoming')}}">Back to Events</a>
</div>

@auth
<div class="admin-row">
    @editButton(['action' => route('event.edit', $id), 'label' => 'Edit Event'])
</div>
@endauth
<div class="event-container">
    <h1 class="m-2">{{ $title }}</h1>
    <h3 class="m-2">{{date('d-M-y', strtotime($event_timestamp))}}</h3>
    <div class="m-2">
        {!!$content!!}
    </div>
</div>

@auth
<div class="admin-row">
    @editButton(['action' => route('event.edit', $id), 'label' => 'Edit Event'])
</div>
@endauth

@endsection
