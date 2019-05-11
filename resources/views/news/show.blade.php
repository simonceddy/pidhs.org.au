@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div class="admin-row">
            <a href="{{ route('news.edit', $id) }}" class="button button-blue">Edit Article</a>
        </div>
    @endauth
    <div class="m-2">
        <a class="link" href="{{'/news'}}">Back to News</a>
    </div>
    @include('shared.component.htmlarticle')
@endsection
