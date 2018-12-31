@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="container">
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
