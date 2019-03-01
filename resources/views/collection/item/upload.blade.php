@extends('layout')

@section('content')
    <form action="/upload/item" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        @csrf
        <input type="file" multiple name="files[]" id="files" />
        <button type="submit">Upload</button>
    </form>
@endsection
