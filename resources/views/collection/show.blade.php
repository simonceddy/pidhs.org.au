@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
<div class="container">
    <div class="row">
        <h1>
            Collection
        </h1>
    </div>
    <div class="row">
        @foreach ($collection->items as $item)
            <div class="col-sm-3">
                {{$item->title}}
            </div>
        @endforeach
    </div>
</div>
@endsection
