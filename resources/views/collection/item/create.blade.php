@extends('layout')

@section('content')
<div class="container" id="item-form">
    <h1>Add items to Collection</h1>
    <form method="POST" action="{{route('item.store', $collection)}}" enctype="multipart/form-data" accept-charset="UTF-8" class="form-default flex flex-col">
        @csrf
        @for ($i = 0; $i < ($count  = $items ?? 5); $i++)
            @include('shared.component.form.itemupload')
        @endfor
        <div class="flex flex-col my-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
