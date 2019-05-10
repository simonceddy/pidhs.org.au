@extends('layout')

@section('title', $title)

@section('content')

<div class="breadcrumb">
<a class="link" href="{{route('exhibitions.index')}}">Exhibitions</a> > <a class="link" href="{{route('exhibitions.show', $exhibition)}}">{{$exhibition->title}}</a> > {{$title}}
</div>
@auth
    <div class="flex flex-row justify-start">
        <div class="m-2">
            <a href="{{ route('section.edit', [$exhibition, $id]) }}" class="create-button link">Edit Section</a>
        </div>

        <div class="m-2">
            <a href="{{ route('section.media.index', [$exhibition, $id]) }}" class="create-button link">Manage Section Media</a>
        </div>
    </div>
@endauth

<h1 class="article-heading">{{ $title }}</h1>

@published

<div class="flex flex-row overflow-scroll justify-center">
    @foreach ($media as $item)
        <a href="/storage/exhibitions/{{$item->thumbnail}}">
        <img src="/storage/exhibitions/{{$item->thumbnail}}" class="exhibition-image"></a>
    @endforeach
</div>

<div class="text-left" id="article">
    <div class="article-content m-2" id="article-content">
        {!! $content !!}
    </div>
</div>

@auth
    <div class="flex flex-row justify-start">
        <div class="m-2">
            <a href="{{ route('section.edit', [$exhibition, $id]) }}" class="create-button link">Edit Section</a>
        </div>

        <div class="m-2">
            <a href="{{ route('section.media.index', [$exhibition, $id]) }}" class="create-button link">Manage Section Media</a>
        </div>
    </div>
@endauth
@endsection
