@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div>
    <a class="link" href="{{route('collection.index')}}">Collections</a> > {{$collection->title}}
</div>

<h1 class="article-heading">
    {{$collection->title ?? "Collection"}}
</h1>

<div class="flex flex-row flex-wrap">
    @foreach ($collection->items as $item)
        <div class="collection-box p-2" onclick="location='{{route('item.show', [$collection, $item])}}'">
            <a href="{{route('item.show', [$collection, $item])}}" class="flex flex-col w-full h-full justify-center items-center">
                <img src="@itemThumb({{$item->thumbnail}})" class="collection-thumbnail">
            </a>
        </div>
    @endforeach
</div>
@auth
    <div>
        <a class="link" href="{{ route('collection.edit', $collection) }}" class="create-button">Edit Collection</a>
    </div>
    <div>
        <a class="link" href="{{ route('item.create', $collection) }}" class="create-button">Add Items to the Collection</a>
    </div>
@endauth
@endsection
