@extends('layout')

@section('content')
<div class="container">
    <form action="{{ $action ?? route('event.store') }}" method="POST" name="events.form" class="form-default">
        @csrf
        @if (isset($method))
            @method($method)
        @endif
        <div class="flex flex-row items-center m-2">
            <label for="title" class="mr-2">Event Title</label>
            <input type="text" class="form-input" name="title" id="title" placeholder="Title" required value="{{ $title ?? null }}">
        </div>
        <div class="flex flex-row items-center m-2">
            <label for="event-date" class="mr-2">Date of Event:</label>
            <input type="date" class="form-input" name="event-date" id="event-date" value="{{ $event_date ?? null }}">
        </div>
        @ckeditor
        <div class="flex justify-center m-2">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </form>
</div>

@endsection
