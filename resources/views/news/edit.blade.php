@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', [
    'action' => route('news.update', $id),
    'method' => 'PATCH'
])
<div class="container">
    @include('shared.articledelete', [
        'action' => route('news.destroy', $id)
    ])
</div>
</div>
@endsection
