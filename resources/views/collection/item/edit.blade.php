@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<h1 class="article-heading">Edit Caption</h1>

<form method="POST" action="{{route('item.update', [$collection, $id])}}" class="form-default flex flex-col my-2">
    @csrf
    @method('PATCH')
    <div class="form-group flex p-4 flex-col">
        <label for="caption">
            Caption
        </label>
        <textarea name="caption" id="caption" class="form-input item-caption-input">
            {{$caption}}
        </textarea>
    </div>
    <div class="flex flex-row justify-around my-4 items-center">
        <button type="submit" class="submit-button">Save</button>
        @cancel(['action' => route('item.show', [$collection, $id])])
    </div>
</form>

@deleteForm([
    'action' => route('item.destroy', [$collection, $id])
])
@endsection
