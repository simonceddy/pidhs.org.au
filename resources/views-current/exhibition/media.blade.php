@extends('exhibition.layout.app')

@section('title', 'Exhibitions')

@section('content')
<div class="breadcrumb">
    <a class="link" href="{{route('exhibitions.index')}}">Exhibitions</a> > <a class="link" href="{{route('exhibitions.show', $exhibition)}}">{{$exhibition->title}}</a>
</div>
<h1 class="article-heading">{{$exhibition->title}} Media</h1>

<div>
    @include('exhibition.component.uploadmedia', [
        'action' => route('exhibition.media.store', [$exhibition])
    ])
</div>

<div>
@foreach ($media as $item)
    @include('exhibition.component.exhibitionmediarow', [
        'exhibition' => $exhibition,
        'item' => $item
    ])
@endforeach
</div>
@endsection