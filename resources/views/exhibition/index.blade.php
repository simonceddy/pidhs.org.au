@extends('layout')

@section('title', 'Exhibitions')

@section('content')
    
<h1 class="article-heading">Exhibitions</h1>
<div class="flex flex-row m-2">
    <div class="m-2 flex-1">
        <p>Exhibition text</p>
        <div class="exhibitions-container flex flex-row flex-wrap flex-1">
            @foreach ($exhibitions as $exhibition)
            <div class="flex-1 border border-black">
                <a href="{{route('exhibitions.show', $exhibition)}}" class="no-underline hover:underline">{{$exhibition->title}}</a>
            </div>
            @endforeach
        </div>
        {{-- @include('exhibition.component.sidebar', ['list' => $exhibitions]) --}}
    </div>
    <div class="flex flex-col w-1/5 ml-6">
        <h3 class="mb-2">Exhibitions</h3>
        <div class="text-sm flex flex-col">
        @foreach ($exhibitions as $exhibition)
            <span class="my-1"><a href="{{route('exhibitions.show', $exhibition)}}" class="no-underline hover:underline">{{$exhibition->title}}</a></span>
        @endforeach
        </div>
    </div>
</div>
@auth
    <div class="m-2">
        <a href="{{ route('exhibitions.create') }}" class="create-button">Add Exhibition</a>
    </div>
@endauth
@endsection
