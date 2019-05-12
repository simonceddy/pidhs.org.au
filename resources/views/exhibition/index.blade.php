@extends('layout')

@section('title', $article->title)

@section('content')
    
<h1 class="article-heading">{{$article->title}}</h1>
@auth
<div class="admin-row">
        @createButton([
            'action' => route('exhibitions.create'),
            'label' => 'Add Exhibition'
        ])
</div>
@endauth
<div class="flex flex-col m-2">
    {{-- <div class="m-2 flex-1"> --}}
        <div class="my-4">
            {!! $article->content !!}
            @auth
            <div class="admin-row">
                @editButton([
                    'action' => route('article.edit', $article),
                    'label' => 'Edit Article'
                ])
            </div>
            @endauth
        </div>
        <div class="exhibitions-container flex flex-row flex-wrap flex-1">
            @foreach ($exhibitions as $exhibition)
            <div class="collection-box p-2">
                <a href="{{route('exhibitions.show', $exhibition)}}" class="no-underline hover:underline">
                    @if (!$exhibition->thumbnail()->get()->isEmpty())
                        <img src="@sectionThumb({{$exhibition->thumbnail()->get()->first()->thumbnail}})" class="collection-thumbnail">
                    @elseif (null !== ($media = $exhibition->media()->first()))
                        <img src="@sectionThumb({{$media->thumbnail}})" class="collection-thumbnail">
                    @endif
                    <span class="my-1">{{$exhibition->title}}</span>
                </a>
            </div>
            @endforeach
        </div>
    {{-- </div> --}}
    {{-- <div class="flex flex-col w-1/5 ml-6">
        <h3 class="mb-2">Exhibitions</h3>
        <div class="text-sm flex flex-col">
        @foreach ($exhibitions as $exhibition)
            <span class="my-1"><a href="{{route('exhibitions.show', $exhibition)}}" class="no-underline link">{{$exhibition->title}}</a></span>
        @endforeach
        </div>
    </div> --}}
</div>
@endsection
