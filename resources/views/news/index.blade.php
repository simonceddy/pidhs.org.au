@extends('layout')

@section('title', $title ?? 'News')

@section('content')
    @include('shared.articlelist', [
        'title' => $title ?? 'News',
        'baseUri' => 'news'
    ])
@endsection
