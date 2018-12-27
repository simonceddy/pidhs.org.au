@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', ['action' => route('news.store')])
</div>
@endsection
