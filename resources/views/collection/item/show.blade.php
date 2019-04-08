@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="breadcrumb">
<a href="{{route('collection.index')}}">Collections</a> > <a href="{{route('collection.show', $collection)}}">{{$collection->title}}</a>
</div>
<div>
    <div class="my-2 item-box">
        <a href="@itemUrl({{$item->thumbnail}})">
            <img src="@itemUrl({{$item->thumbnail}})">
        </a>
    </div>
    <div class="mt-2 item-box">
        {{ $item->caption }}
    </div>
</div>
@auth
        <div>
            <a href="{{ route('item.edit', [$collection, $item]) }}" class="create-button">Edit Item</a>
        </div>
        <div>
        @deleteForm([
            'action' => route('item.destroy', [$collection, $item])
        ])
    @endauth
@endsection
