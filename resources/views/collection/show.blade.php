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
        <h1 class="m-2">
            {{$collection->title ?? "Collection"}}
        </h1>
    </div>
    <div class="flex flex-row flex-wrap">
        @foreach ($collection->items as $item)
            <div class="collection-box p-2">
                <a href="{{route('item.show', [$collection, $item])}}" class="flex flex-col">
                <img src="@itemThumb({{$item->thumbnail}})">
                <span>{{$item->title}}</span>
            </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
