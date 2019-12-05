@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('news.update', $id) }}" method="POST" name="create.article" class="form-default flex flex-col">
            @csrf
            @method('PATCH')
            @include('shared.component.form.title')
            @ckeditor

            <div class="flex flex-row m-2 justify-around">
                @submit()
                @cancel(['action' => route('news.show', $id)])
            </div>
    </form>

<div class="container">
    @include('shared.component.form.delete', [
        'action' => route('news.destroy', $id)
    ])
</div>
</div>
@endsection
