@extends('layouts/layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    <h1>{{ $title }}</h1>

    <div class="container">
        @foreach ($list as $article)
        <h1 style="width: 95%;"><a href="/news/{{$article->id}}">
            {{$article->title}}
        </a></h1>

    <p class="pubDate">Published on {{$article->publicationDate}}</p>
        @endforeach
    </div>
@endsection
