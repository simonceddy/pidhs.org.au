@extends('exhibition.layout.app')

@section('title', 'Exhibitions')

@section('content')
<div>
    <form method="POST" action="{{route('exhibitions.update', $id)}}" class="form-default">
        @csrf
        @method('PATCH')
        @include('shared.component.form.title')
        @ckeditor
        <div class="flex flex-row m-2 justify-around">
            @submit(['label' => 'Save'])
            @cancel(['action' => route('exhibitions.show', $id)])
        </div>
    </form>
    @include('shared.component.form.delete', [
        'action' => route('exhibitions.destroy', $id)
    ])
</div>
@endsection
