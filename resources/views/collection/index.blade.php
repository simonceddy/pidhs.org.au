@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="container">
    @auth
        <div>
            <a href="{{ route('collection.create') }}" class="create-button">Create a new Collection</a>
        </div>
    @endauth
    <div class="row">
        <h1>
            Collections
        </h1>
    </div>
    <div class="row">
        @foreach ($collections as $collection)
        <div class="col-sm-3">
        <a href="{{route('collection.show', $collection->id)}}">{{$collection->title}}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
