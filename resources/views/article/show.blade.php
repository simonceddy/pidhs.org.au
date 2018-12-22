@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    <div class="container" id="article">
        <h1>{{ $title }}</h1>

        <div class="container" id="article-content">
            {!! $content !!}
        </div>
    </div>
@endsection
