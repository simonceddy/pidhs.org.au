@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', ['action' => route('article.store')])
</div>
@endsection
