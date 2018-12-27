@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', [
    'action' => route('essay.update', $id),
    'method' => 'PATCH'
])
</div>

<div class="container">
    @include('shared.articledelete', [
        'action' => route('essay.destroy', $id)
    ])
</div>
@endsection
