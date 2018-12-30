@extends('layout')

@section('content')
<div class="container" id="item-form">
    <h1>Add a new item to Collection</h1>
    <form method="POST" action="{{route('item.store')}}" enctype="multipart/form-data" accept-charset="UTF-8">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text"
            class="form-control" name="title" id="title" placeholder="Enter a title for this item">
        </div>
        <div class="form-group">
          <label for="image-upload">Image file</label>
          <input type="file" class="form-control-file" name="image-upload" id="image-upload" placeholder="Upload image file">
        </div>
        <div class="form-group">
                @include('includes.editor', [
                    'editor_title' => 'Caption',
                    'editor_name' => 'caption'
                ])
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
