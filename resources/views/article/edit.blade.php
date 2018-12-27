@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', [
    'action' => route('article.update', $slug),
    'method' => 'PATCH'
])
</div>
@endsection
