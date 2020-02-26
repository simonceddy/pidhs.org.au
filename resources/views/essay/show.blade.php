@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="m-2">
    <a href="{{ route('essay.index') }}">Back to Essays</a>
</div>
@auth
<div class="admin-row">
    <div class="m-2">
        <a href="{{ route('essay.edit', $id) }}" class="button button-blue">Edit Essay</a>
    </div>
</div>
@endauth
@include('shared.component.htmlarticle')
@auth
<div class="admin-row">
    <div class="m-2">
        <a href="{{ route('essay.edit', $id) }}" class="button button-blue">Edit Essay</a>
    </div>
</div>
@endauth
@endsection
