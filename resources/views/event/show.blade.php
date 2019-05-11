@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
<div class="m-2">
    <a class="link" href="{{session()->previousUrl()}}">Back to Events</a>
</div>

@auth
<div class="admin-row">
    @editButton(['action' => route('event.edit', $id), 'label' => 'Edit Event'])
</div>
@endauth
<div class="event-container">
    <h1 class="m-2">{{ $title }}</h1>
    <h3 class="m-2">{{$event_date}}</h3>
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
