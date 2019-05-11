@extends('layout')

@section('title', $title ?? 'News')

@section('content')
    @auth
    <div class="admin-row">
        @createButton(['action' => route('news.create'), 'label' => 'Create a News Article'])
    </div>
    @endauth
    @include('shared.articlelist', [
        'title' => $title ?? 'News',
        'baseUri' => 'news'
    ])
    @auth
    <div class="admin-row">
        @createButton(['action' => route('news.create'), 'label' => 'Create a News Article'])
    </div>
    @endauth
@endsection
