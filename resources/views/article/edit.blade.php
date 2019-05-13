@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('article.update', $slug) }}" method="POST" name="create.article" class="form-default flex flex-col">
            @csrf
            @method('PATCH')
            @include('shared.component.form.title')
            @ckeditor

            <div class="flex flex-row m-2 justify-around">
                @submit()
                @cancel(['action' => route('article.show', $slug)])
            </div>
    </form>
</div>
@endsection
