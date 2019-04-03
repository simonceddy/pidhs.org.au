@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', [
    'action' => route('essay.update', $id),
    'method' => 'PATCH'
])
</div>

<div class="container">
    @include('shared.component.form.delete', [
        'action' => route('essay.destroy', $id)
    ])
</div>
@endsection
