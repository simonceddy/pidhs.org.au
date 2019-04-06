@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    <div>
        Create a new collection
    </div>

    <form method="POST" action="{{route('collection.store')}}">
        @csrf
        @include('shared.component.form.title')
        <div class="flex flex-row m-2 justify-center">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </form>
@endsection
