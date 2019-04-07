@extends('layout')

@section('title', $exhibition->title)

@section('content')
<div class="breadcrumb">
<a href="{{route('exhibitions.index')}}">Exhibitions</a> > {{$exhibition->title}}
</div>
    

<h1 class="article-heading">{{$exhibition->title}}</h1>

<div class="flex flex-row m-2">

    <div class="exhibitions-container flex flex-row flex-wrap flex-1">
        {!! $exhibition->content !!}
    </div>
    {{-- @include('exhibition.component.sidebar', ['list' => $exhibition->exhibitions]) --}}

    <div class="flex flex-col w-1/5 ml-6">
        <h3 class="mb-2">Sections</h3>
        <div class="text-sm flex flex-col">
        @foreach ($exhibition->sections as $section)
            <span class="my-1"><a class="no-underline hover:underline" href="{{route('section.show', [$exhibition, $section])}}">{{$section->title}}</a></span>
        @endforeach
        </div>
    </div>
</div>

@auth
    <div class="m-2">
        <a href="{{ route('exhibitions.edit', $exhibition) }}" class="create-button">Edit Exhibition</a>
    </div>
    <div class="m-2">
        <a href="{{ route('section.create', $exhibition) }}" class="create-button">Add Section</a>
    </div>
@endauth

@endsection
