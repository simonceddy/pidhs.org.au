@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', [
    'action' => route('news.update', $id),
    'method' => 'PATCH'
])

<div class="container">
    @include('shared.component.form.delete', [
        'action' => route('news.destroy', $id)
    ])
</div>
</div>
@endsection
