@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    <div>
        Create a new collection
    </div>

    <form method="POST" action="{{route('collection.store')}}" class="form-default flex flex-col my-2">
        @csrf
        @include('shared.component.form.title')
        <div class="flex flex-row m-2 justify-around">
            <button type="submit" class="submit-button">Save</button>
            @cancel(['action' => route('collection.index')])
        </div>
    </form>
@endsection
