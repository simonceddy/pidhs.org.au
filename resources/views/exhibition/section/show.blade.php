@extends('layout')

@section('title', $title)

@section('content')
    @auth
        <div>
            <a href="{{ route('section.edit', [$exhibition, $id]) }}" class="create-button">Edit Article</a>
        </div>
    @endauth
    @include('shared.component.htmlarticle')
@endsection
