@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div>
            <a href="{{ route('item.edit', [$collection, $item]) }}" class="create-button">Edit Item</a>
        </div>
    @endauth
<div>
{{--     <h1 class="article-heading">
        {{ $item->title }}
    </h1> --}}
    <div class="my-2">
        <a href="@itemUrl({{$item->thumbnail}})">
            <img src="@itemUrl({{$item->thumbnail}})">
        </a>
    </div>
    <div class="mt-2">
        {{ $item->caption }}
    </div>
</div>
@endsection
