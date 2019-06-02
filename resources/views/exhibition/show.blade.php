@extends('exhibition.layout.app')

@section('title', $exhibition->title)

@section('content')
<div class="breadcrumb">
<a class="link" href="{{route('exhibitions.index')}}">Exhibitions</a> > {{$exhibition->title}}
</div>

<h1 class="article-heading">{{$exhibition->title}}</h1>

<div class="flex flex-row m-2">

    <div class="exhibitions-container flex flex-col flex-1">
        {!! $exhibition->content !!}

        <div class="flex flex-row flex-wrap">
            @foreach ($sections as $section)
                <div class="collection-box p-2 m-2">
                    <a href="{{route('section.show', [$exhibition, $section])}}" class="flex flex-col w-full h-full justify-center items-center">
                        @if (!$section->thumbnail()->get()->isEmpty())
                            <img src="@sectionThumb({{$section->thumbnail()->get()->first()->thumbnail}})" class="exhibition-thumbnail">
                        @elseif (null !== ($media = $section->media()->first()))
                            <img src="@sectionThumb({{$media->thumbnail}})" class="exhibition-thumbnail">
                        @endif
                        <span class="my-1 text-xl">{{$section->title}}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @include('exhibition.component.sidebar', ['list' => $exhibition->exhibitions]) --}}

    <div class="flex flex-col w-1/5 ml-6">
        <h3 class="mb-2">Sections</h3>
        <div class="text-sm flex flex-col">
        @foreach ($sections as $section)
            <span class="my-1"><a class="no-underline link text-xl" href="{{route('section.show', [$exhibition, $section])}}">{{$section->title}}</a></span>
        @endforeach
        </div>
    </div>
</div>

@auth
<div class="admin-row">

    <div class="m-2">
        <a href="{{ route('exhibitions.edit', $exhibition) }}" class="button button-blue">Edit Exhibition</a>
    </div>
    <div class="m-2">
        <a href="{{ route('section.create', $exhibition) }}" class="button button-green">Add Section</a>
    </div>
</div>
@endauth

@endsection
