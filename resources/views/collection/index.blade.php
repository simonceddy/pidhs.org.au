@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<h1 class="m-2">
    Collections
</h1>

<div class="collections-container flex flex-row flex-wrap justify-around">


@foreach ($collections as $collection)
    <div class="collection-box border px-4 py-6" onclick="location='{{route('collection.show', $collection->id)}}'">
        <a href="{{route('collection.show', $collection->id)}}">{{$collection->title}}</a>
    </div>
@endforeach
</div>

@auth
    <div class="admin-row">
        <a href="{{ route('collection.create') }}" class="button button-green">Add Collection</a>
    </div>
@endauth
@endsection
