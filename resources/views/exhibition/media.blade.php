@extends('layout')

@section('title', 'Exhibitions')

@section('content')
<div class="breadcrumb">
    <a class="link" href="{{route('exhibitions.index')}}">Exhibitions</a> > <a class="link" href="{{route('exhibitions.show', $exhibition)}}">{{$exhibition->title}}</a> > <a class="link" href="{{route('section.show', [$exhibition, $section])}}">{{$section->title}}</a>
</div>
<h1 class="article-heading">{{$section->title}} Media</h1>
<div>
@foreach ($media as $item)
    @include('exhibition.component.mediarow', [
        'item' => $item
    ])
@endforeach
</div>
@endsection