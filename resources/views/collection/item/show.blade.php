@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div>
            <a href="{{ route('item.edit', $id) }}" class="create-button">Edit Item</a>
        </div>
    @endauth
<div>
    <h1>
        {{ $title }}
    </h1>
    <div><img src="{{ $thumb_url }}"></div>
</div>
@endsection
