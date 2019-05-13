@extends('layout')

@section('title', 'Exhibitions')

@section('content')
<form method="POST" action="{{route('section.store', $exhibition)}}" class="form-default" enctype="multipart/form-data" accept-charset="UTF-8">
    @csrf
    @include('shared.component.form.title')

    {{-- section media upload --}}
    <div class="flex flex-row m-2 items-center">
        <label for="files" class="mr-2">Section Media</label>
        <input type="file" multiple name="files[]" id="files"  class="form-control form-input flex-1" />
    </div>

    @ckeditor
    <div class="flex flex-row m-2 justify-around">
        @submit(['label' => 'Save'])
        @cancel(['action' => route('exhibitions.show', $exhibition)])
    </div>
</form>
@endsection
