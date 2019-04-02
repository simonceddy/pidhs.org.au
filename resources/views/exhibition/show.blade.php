@extends('layout')

@section('title', 'Exhibitions')

@section('content')
    {{-- @auth
        <div>
            <a href="{{ route('article.edit', $slug) }}" class="create-button">Edit Article</a>
        </div>
    @endauth --}}
    @include('shared.article')
@endsection
