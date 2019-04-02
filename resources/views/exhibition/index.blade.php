@extends('layout')

@section('title', 'Exhibitions')

@section('content')
    {{-- @auth
        <div>
            <a href="{{ route('article.edit', $slug) }}" class="create-button">Edit Article</a>
        </div>
    @endauth --}}
<h1 class="m-2">Exhibitions</h1>
<div class="flex flex-row">
    <div class="exhibitions-container flex flex-row flex-wrap flex-1">
        @foreach ($exhibitions as $exhibition)
        <div class="flex-1 border border-black">
            <a href="{{route('exhibitions.show', $exhibition)}}" class="no-underline hover:underline">{{$exhibition->title}}</a>
        </div>
        @endforeach
    </div>
    {{-- @include('exhibition.component.sidebar', ['list' => $exhibitions]) --}}
    <div class="text-sm flex flex-col w-1/5">
        {{-- sidebar --}}
        @foreach ($exhibitions as $exhibition)
            <span><a href="{{route('exhibitions.show', $exhibition)}}" class="no-underline hover:underline">{{$exhibition->title}}</a></span>
        @endforeach
    </div>
</div>
@endsection
