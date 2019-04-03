@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    @auth
        <div>
            <a href="{{ route('essay.edit', $id) }}" class="create-button">Edit {{$title}}</a>
        </div>
    @endauth
    <div class="m-2">
        <a href="{{route('essay.index')}}">Back to Essays</a>
    </div>
    @include('shared.component.htmlarticle')
@endsection
