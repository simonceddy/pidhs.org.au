@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div>
            <a href="{{ route('news.edit', $id) }}" class="create-button">Edit Article</a>
        </div>
    @endauth
    @include('shared.article')
@endsection
