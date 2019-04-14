@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div class="m-2">
            <a href="{{ route('news.edit', $id) }}" class="create-button">Edit Article</a>
        </div>
    @endauth
    <div class="m-2">
        <a href="{{'/news'}}">Back to News</a>
    </div>
    @include('shared.component.htmlarticle')
@endsection
