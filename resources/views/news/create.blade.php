@extends('layout')

@section('content')
<div class="container">
    <form action="{{route('news.store')}}" method="POST" name="create.article" class="form-default flex flex-col">
        @csrf
        
        @include('shared.component.form.title')
        
        @ckeditor
        
        <div class="flex flex-row m-2 justify-around">
            @include('shared.component.buttons.submit', ['label' => 'Save'])
            @cancel(['action' => route('news.index')])
        </div>
    </form>
</div>
@endsection
