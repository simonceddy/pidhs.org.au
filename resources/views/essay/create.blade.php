@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', ['action' => route('essay.store')])
</div>
@endsection