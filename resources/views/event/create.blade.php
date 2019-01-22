@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', ['action' => route('event.store')])
</div>
@endsection
