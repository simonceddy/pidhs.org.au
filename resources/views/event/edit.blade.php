@extends('layout')

@section('content')
<div class="container">
@include('admin.forms.events', [
    'action' => route('event.update', $id),
    'method' => 'PATCH'
])
<div class="container">
    @include('shared.articledelete', [
        'action' => route('event.destroy', $id)
    ])
</div>
</div>
@endsection
