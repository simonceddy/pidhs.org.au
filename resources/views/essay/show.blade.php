@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div>
            <a href="{{ route('essay.edit', $id) }}" class="create-button">Edit {{$title}}</a>
        </div>
    @endauth
    @include('shared.article')
@endsection
