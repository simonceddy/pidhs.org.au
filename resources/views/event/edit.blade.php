@extends('layout')

@section('content')
<div class="container">
    {{ route('event.update', $id) }}
@include('admin.forms.events', [
    'action' => route('event.update', $id),
    'method' => 'PATCH'
])
<div class="container">
    @include('shared.component.form.delete', [
        'action' => route('event.destroy', $id)
    ])
</div>
</div>
@endsection
