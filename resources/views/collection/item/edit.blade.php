@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<form method="POST" action="{{route('item.update')}}">
    @csrf
    <div class="form-group flex items-center flex-row">
        <label for="caption">
            Caption
        </label>
        <textarea name="caption" id="caption"></textarea>
    </div>
    <div class="flex flex-row m-2 justify-center">
        <button type="submit" class="submit-button">Save</button>
    </div>
</form>
@endsection
