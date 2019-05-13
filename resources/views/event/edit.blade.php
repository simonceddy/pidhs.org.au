@extends('layout')

@section('content')
<div class="container">
<form action="{{ route('event.update', $id) }}" method="POST" name="events.form" class="form-default">
        @csrf
        @method('PATCH')
        <div class="flex flex-row items-center m-2">
            <label for="title" class="mr-2">Event Title</label>
            <input type="text" class="form-input" name="title" id="title" placeholder="Title" required value="{{ $title ?? null }}">
        </div>
        <div class="flex flex-row items-center m-2">
            <label for="event-date" class="mr-2">Date of Event:</label>
            <input type="date" class="form-input" name="event-date" id="event-date" value="{{ $event_date ?? null }}">
        </div>
        @ckeditor
        <div class="flex justify-around flex-row m-2">
            @submit(['label' => 'Save'])
            @cancel(['action' => route('event.show', $id)])

        </div>
    </form>
<div class="container">
    @include('shared.component.form.delete', [
        'action' => route('event.destroy', $id)
    ])
</div>
</div>
@endsection
