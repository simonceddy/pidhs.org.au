@extends('layout')

@section('title', 'Exhibitions')

@section('content')
<div>
    <form method="POST" action="{{route('section.update', [$exhibition, $id])}}" class="form-default">
        @csrf
        @method('PATCH')
        @include('shared.component.form.title')
        @ckeditor
        <div class="flex flex-row m-2 justify-center">
            <button type="submit" class="submit-button">Save</button>
        </div>
    </form>
    @include('shared.component.form.delete', [
        'action' => route('section.destroy', [$exhibition, $id])
    ])
</div>
@endsection
