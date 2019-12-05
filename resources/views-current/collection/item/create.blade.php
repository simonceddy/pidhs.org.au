@extends('layout')

@section('content')
<div class="container" id="item-form">

    <h1 class="article-heading">Add items to <a href="{{route('collection.show', $collection)}}">{{$collection->title}}</a></h1>

    <form method="POST" action="{{route('item.store', $collection)}}" enctype="multipart/form-data" accept-charset="UTF-8" class="form-default flex flex-col my-2">
        @csrf
        <div class="flex flex-col">
        @for ($i = 0; $i < ($count  = $items ?? 5); $i++)
            @include('shared.component.form.itemupload')
        @endfor
        </div>
        <div class="flex flex-row justify-around my-4 items-center">
            <button type="submit" class="submit-button">Submit</button>
            @cancel(['action' => route('collection.show', $collection)])
        </div>
    </form>
    
</div>
@endsection
