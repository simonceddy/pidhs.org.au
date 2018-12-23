@extends('layout')

@section('content')
<div class="container">
<form action="{{route('article.store')}}" method="POST" name="create.article">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $title }}">
            </div>
        </div>
        @include('includes.editor')
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
{{-- <script>
    window.CKEditor.create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(err => {
            console.log(err);
        });

</script> --}}
<script src="/js/editor.js"></script>
@endpush
