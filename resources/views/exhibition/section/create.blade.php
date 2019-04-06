@extends('layout')

@section('title', 'Exhibitions')

@section('content')
<form method="POST" action="{{route('section.store', $exhibition)}}" class="form-default">
    @include('shared.component.form.title')
    @include('shared.component.ckeditor')
    <div class="flex flex-row m-2 justify-center">
        <button type="submit" class="submit-button">Save</button>
    </div>
</form>
@endsection
