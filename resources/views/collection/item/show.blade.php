@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="breadcrumb">
<a class="link" href="{{route('collection.index')}}">Collections</a> > <a class="link" href="{{route('collection.show', $collection)}}">{{$collection->title}}</a>
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
<div class="admin-row">
    <div class="m-2">
        <a href="{{ route('item.edit', [$collection, $item]) }}" class="button button-blue">Edit Item</a>
    </div>
</div>
@endauth
@endsection
