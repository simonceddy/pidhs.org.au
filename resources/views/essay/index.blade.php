@extends('layout')

@section('title', $title ?? 'Essays & Talks')

@section('content')
    @auth
        <div class="m-2">
            <a href="{{ route('essay.create') }}" class="link create-button">Add a new Essay</a>
        </div>
    @endauth
    @include('shared.articlelist', [
        'title' => $title ?? 'Essays & Talks',
        'baseUri' => 'essay'
    ])
@endsection
