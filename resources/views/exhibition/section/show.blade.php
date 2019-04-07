@extends('layout')

@section('title', $title)

@section('content')

<div class="breadcrumb">
<a href="{{route('exhibitions.index')}}">Exhibitions</a> > <a href="{{route('exhibitions.show', $exhibition)}}">{{$exhibition->title}}</a> > {{$title}}
</div>
@include('shared.component.htmlarticle')
@auth
    <div class="m-2">
        <a href="{{ route('section.edit', [$exhibition, $id]) }}" class="create-button">Edit Section</a>
    </div>
@endauth
@endsection
