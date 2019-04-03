@extends('layout')

@section('title', $exhibition->title)

@section('content')
    {{-- @auth
        <div>
            <a href="{{ route('article.edit', $slug) }}" class="create-button">Edit Article</a>
        </div>
    @endauth --}}
<h1 class="article-heading">{{$exhibition->title}}</h1>
<div class="flex flex-row m-2">
    <div class="exhibitions-container flex flex-row flex-wrap flex-1">
        @foreach ($exhibition->sections as $section)
        <div class="flex-1 border border-black">
            <a href="{{route('section.show', [$exhibition, $section])}}">{{$section['title']}}</a>
        </div>
        @endforeach
    </div>
    {{-- @include('exhibition.component.sidebar', ['list' => $exhibitions]) --}}
    <div class="flex flex-col w-1/5 ml-6">
        <h3 class="mb-2">Sections</h3>
        <div class="text-sm flex flex-col">
        @foreach ($exhibition->sections as $section)
            <span class="my-1"><a class="no-underline hover:underline" href="{{route('section.show', [$exhibition, $section])}}">{{$section->title}}</a></span>
        @endforeach
        </div>
    </div>
</div>
@endsection
