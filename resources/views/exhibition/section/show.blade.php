@extends('layout')

@section('title', $title)

@section('content')

<div class="breadcrumb">
<a class="link" href="{{route('exhibitions.index')}}">Exhibitions</a> > <a class="link" href="{{route('exhibitions.show', $exhibition)}}">{{$exhibition->title}}</a> > {{$title}}
</div>
@include('shared.component.htmlarticle')
@auth
    <div class="m-2">
        <a href="{{ route('section.edit', [$exhibition, $id]) }}" class="create-button link">Edit Section</a>
    </div>
@endauth
@endsection
