@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="m-2">
    <a href="{{session()->previousUrl()}}">Back to Essays</a>
</div>
@include('shared.component.htmlarticle')
@auth
    <div class="m-2">
        <a href="{{ route('essay.edit', $id) }}" class="create-button">Edit {{$title}}</a>
    </div>
@endauth
@endsection
