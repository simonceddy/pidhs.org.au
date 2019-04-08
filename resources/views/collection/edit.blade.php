@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    <div>
        Edit collection
    </div>

    <form method="POST" action="{{route('collection.update', $id)}}">
        @method('PATCH')
        @csrf
        @include('shared.component.form.title')
        <div class="flex flex-row m-2 justify-center">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </form>

    @deleteForm([
        'action' => route('collection.destroy', $id)
    ])
@endsection
