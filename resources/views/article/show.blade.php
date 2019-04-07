@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
@include('shared.component.htmlarticle')
@auth
    <div class="m-2">
        <a href="{{ route('article.edit', $slug) }}" class="create-button">Edit Article</a>
    </div>
@endauth
@endsection
