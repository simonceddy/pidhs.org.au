@extends('layout')

@section('title', $title ?? 'Essays & Talks')

@section('content')
    @auth
        <div>
            <a href="{{ route('essay.create') }}" class="create-button">Add a new Essay</a>
        </div>
    @endauth
    @include('shared.articlelist', [
        'title' => $title ?? 'Essays & Talks',
        'baseUri' => 'essay'
    ])
@endsection
