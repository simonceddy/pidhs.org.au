@extends('layout')

@section('content')
<div class="container">
@include('shared.articleform', ['action' => route('event.store')])
</div>
@endsection

{{-- @push('fields')
<div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="title" id="title" placeholder="date placeholder" value="">
    </div>
</div>
@endpush --}}
