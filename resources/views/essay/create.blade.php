@extends('layout')

@section('content')
<div class="container">
    <form action="{{route('essay.store')}}" method="POST" name="create.article" class="form-default flex flex-col">
        @csrf
        @include('shared.component.form.title')
        @ckeditor

        <div class="flex flex-row m-2 justify-around">
            @submit()
            @cancel(['action' => route('essay.index')])
        </div>
    </form>
</div>
@endsection
