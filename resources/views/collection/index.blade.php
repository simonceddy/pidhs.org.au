@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<h1 class="m-2">
    Collections
</h1>
@auth
    <div>
        <a href="{{ route('collection.create') }}" class="create-button">Create a new Collection</a>
    </div>
@endauth
<div class="collections-container flex flex-row flex-wrap justify-around">


    @foreach ($collections as $collection)
    <div class="collection-box border px-4 py-6">
    <a href="{{route('collection.show', $collection->id)}}">{{$collection->title}}</a>
    </div>
    @endforeach
</div>
@endsection
