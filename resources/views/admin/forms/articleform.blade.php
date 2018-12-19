@extends('layouts.layout')

@section('content')
<div class="container">
<form action="{{route('article.store')}}" method="POST" name="create.article">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
        </div>
        <fieldset class="form-group row">
            <div class="col-sm-10">

                <label for="editor">Article Content</label>
                <textarea name="editor" id="editor" placeholder="The HTML content of the article" maxlength="100000" style="height: 30em;"></textarea>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    window.CKEditor.create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(err => {
            console.log(err);
        });

</script>
@endsection
