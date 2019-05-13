@extends('layout')

@section('title', 'Exhibitions')

@section('content')
<form method="POST" action="{{route('exhibitions.store')}}" class="form-default">
    @csrf
    @include('shared.component.form.title')
    @ckeditor
    <div class="flex flex-row m-2 justify-around">
        @submit(['label' => 'Save'])
        @cancel(['action' => route('exhibitions.index')])
    </div>
</form>
@endsection
