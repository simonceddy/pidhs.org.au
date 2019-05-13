@extends('layout')

@section('content')

<div class="container">
    <form action="{{ route('essay.update', $id)}}" method="POST" name="create.article" class="form-default flex flex-col">
            @csrf
            @method('PATCH')
            @include('shared.component.form.title')
            @ckeditor

            <div class="flex flex-row m-2 justify-around">
                @submit(['label' => 'Save'])
                @cancel(['action' => route('essay.show', $id)])
            </div>
    </form>
    @include('shared.component.form.delete', [
        'action' => route('essay.destroy', $id)
    ])        
</div>
@endsection
