@extends('layout')

@section('title', $title ?? 'Essays & Talks')

@section('content')
    @include('shared.articlelist', [
        'title' => $title ?? 'Essays & Talks',
        'baseUri' => 'essay'
    ])
@endsection
