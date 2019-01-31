@extends('layout')

@section('title', $title ?? 'News')

@section('content')
    @auth
        <div>
            <a href="{{ route('news.create') }}" class="create-button">Create a News Article</a>
        </div>
    @endauth
    @include('shared.articlelist', [
        'title' => $title ?? 'News',
        'baseUri' => 'news'
    ])
@endsection
