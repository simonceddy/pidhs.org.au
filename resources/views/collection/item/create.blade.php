@extends('layout')

@section('content')
<div class="container" id="item-form">
    <h1>Add items to Collection</h1>
    <form method="POST" action="{{route('item.store', $collection)}}" enctype="multipart/form-data" accept-charset="UTF-8">
        @csrf
        <div class="flex flex-col my-4">
            <div class="form-group">
            <label for="image-upload">Image file</label>
            <input type="file" class="form-control-file" name="image-upload[]" id="image-upload" placeholder="Upload image file">
            </div>
            <div class="form-group flex items-center flex-row">
                <label for="caption">
                    Caption
                </label>
                <textarea name="caption[]" id="caption"></textarea>
            </div>
        </div>
        <div class="flex flex-col my-4">
            <div class="form-group">
            <label for="image-upload">Image file</label>
            <input type="file" class="form-control-file" name="image-upload[]" id="image-upload" placeholder="Upload image file">
            </div>
            <div class="form-group flex items-center flex-row">
                <label for="caption">
                    Caption
                </label>
                <textarea name="caption[]" id="caption"></textarea>
            </div>
        </div>
        <div class="flex flex-col my-4">
            <div class="form-group">
            <label for="image-upload">Image file</label>
            <input type="file" class="form-control-file" name="image-upload[]" id="image-upload" placeholder="Upload image file">
            </div>
            <div class="form-group flex items-center flex-row">
                <label for="caption">
                    Caption
                </label>
                <textarea name="caption[]" id="caption"></textarea>
            </div>
        </div>
        <div class="flex flex-col my-4">
            <div class="form-group">
            <label for="image-upload">Image file</label>
            <input type="file" class="form-control-file" name="image-upload[]" id="image-upload" placeholder="Upload image file">
            </div>
            <div class="form-group flex items-center flex-row">
                <label for="caption">
                    Caption
                </label>
                <textarea name="caption[]" id="caption"></textarea>
            </div>
        </div>
        <div class="flex flex-col my-4">
            <div class="form-group">
            <label for="image-upload">Image file</label>
            <input type="file" class="form-control-file" name="image-upload[]" id="image-upload" placeholder="Upload image file">
            </div>
            <div class="form-group flex items-center flex-row">
                <label for="caption">
                    Caption
                </label>
                <textarea name="caption[]" id="caption"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
