@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
@auth
<div class="admin-row">
    <div class="m-2">
        <a href="{{ route('article.edit', $slug) }}" class="button button-blue">Edit Article</a>
    </div>
</div>
@endauth
@include('shared.component.htmlarticle')
@auth
<div class="admin-row">
    <div class="m-2">
        <a href="{{ route('article.edit', $slug) }}" class="button button-blue">Edit Article</a>
    </div>
</div>
@endauth
@endsection
