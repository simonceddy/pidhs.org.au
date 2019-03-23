@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="container">
    @auth
        <div>
            <a href="{{ route('collection.edit', $collection) }}" class="create-button">Edit Collection</a>
        </div>
        <div>
            <a href="{{ route('item.create', $collection) }}" class="create-button">Add Items to the Collection</a>
        </div>
    @endauth
    <div class="row">
        <h1>
            {{$collection->title ?? "Collection"}}
        </h1>
    </div>
    <div class="flex flex-row flex-wrap">
        @foreach ($collection->items as $item)
            <div class="flex-1">
            <a href="{{route('item.show', $item->id)}}">{{$item->title}}</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
