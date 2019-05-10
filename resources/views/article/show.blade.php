@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
@auth
    <div class="m-2">
        <a href="{{ route('article.edit', $slug) }}" class="button button-blue">Edit Article</a>
    </div>
@endauth
@include('shared.component.htmlarticle')
@auth
    <div class="m-2">
        <a href="{{ route('article.edit', $slug) }}" class="create-button link">Edit Article</a>
    </div>
@endauth
@endsection
