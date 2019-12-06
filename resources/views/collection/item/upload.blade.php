@extends('layout')

@section('content')
    <form action="/upload/item" method="POST" enctype="multipart/form-data" accept-charset="UTF-8" class="flex flex-col">
        @csrf
        <div>
            <select name="collection">
                @foreach ($collections as $collection)
            <option value="{{$collection->id}}">{{$collection->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="file" multiple name="files[]" id="files" />
        </div>
        <div>
            <button type="submit">Upload</button>
        </div>
    </form>
@endsection
