@extends('layout')

@php
    dd(new \ReflectionClass($this->getCompiler()));
@endphp

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div>
            <a href="{{ route('item.edit', $id) }}" class="create-button">Edit Item</a>
        </div>
    @endauth
<div>
    <h1>
        Item
    </h1>
    <div><img src="{{ Storage::get('collection/'.$thumbnail) }}"></div>
</div>
@endsection
