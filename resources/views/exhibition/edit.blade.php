@extends('layout')

@section('title', 'Exhibitions')

@section('content')
<div>
    <form method="POST" action="{{route('exhibitions.update', $id)}}" class="form-default">
        @csrf
        @method('PATCH')
        @include('shared.component.form.title')
        @ckeditor
        <div class="flex flex-row m-2 justify-center">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </form>
    @include('shared.component.form.delete', [
        'action' => route('exhibitions.destroy', $id)
    ])
</div>
@endsection
