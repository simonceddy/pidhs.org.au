@extends('layout')

@section('title', 'Phillip Island & District Historical Society')

@section('content')
    <div>
        Create a new collection
    </div>

    <form>
        @csrf
        @include('shared.component.form.title')
    </form>
@endsection
