@extends('layout')

@section('title', $title ?? 'Essays & Talks')

@section('content')
    @auth
    <div class="admin-row">
        @createButton(['action' => route('essay.create'), 'label' => 'Add a new Essay'])
    </div>
    @endauth
    @include('shared.articlelist', [
        'title' => $title ?? 'Essays & Talks',
        'baseUri' => 'essay'
    ])
    @auth
    <div class="admin-row">
        @createButton(['action' => route('essay.create'), 'label' => 'Add a new Essay'])
    </div>
    @endauth
@endsection
