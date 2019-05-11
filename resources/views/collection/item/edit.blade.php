@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<form method="POST" action="{{route('item.update', [$collection, $id])}}">
    @csrf
    @method('PATCH')
    <div class="form-group flex items-center flex-row">
        <label for="caption">
            Caption
        </label>
    <textarea name="caption" id="caption">{{$caption}}</textarea>
    </div>
    <div class="flex flex-row m-2 justify-center">
        <button type="submit" class="submit-button">Save</button>
    </div>
</form>

@deleteForm([
    'action' => route('item.destroy', [$collection, $id])
])
@endsection
