@extends('layout')

@section('title', $title ?? 'Events')

@section('content')
    @include('shared.articlelist', [
        'title' => $title ?? 'Events',
        'baseUri' => 'event'
    ])
@endsection
