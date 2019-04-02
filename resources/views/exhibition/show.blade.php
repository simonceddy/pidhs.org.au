@extends('layout')

@section('title', $exhibition->title)

@section('content')
    {{-- @auth
        <div>
            <a href="{{ route('article.edit', $slug) }}" class="create-button">Edit Article</a>
        </div>
    @endauth --}}
<h1 class="m-2">{{$exhibition->title}}</h1>
<div class="flex flex-row">
    <div class="exhibitions-container flex flex-row flex-wrap flex-1">
        @foreach ($exhibition->sections as $section)
        <div class="flex-1 border border-black">
            <a href="{{route('section.show', [$exhibition, $section])}}">{{$section['title']}}</a>
        </div>
        @endforeach
    </div>
    {{-- @include('exhibition.component.sidebar', ['list' => $exhibitions]) --}}
    <div class="text-sm flex flex-col w-1/5">
        {{-- sidebar --}}
        @foreach ($exhibition->sections as $section)
            <span><a href="{{route('section.show', [$exhibition, $section])}}">{{$section->title}}</a></span>
        @endforeach
    </div>
</div>
@endsection
