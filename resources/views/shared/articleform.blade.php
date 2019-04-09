<div class="container">
<form action="{{$action ?? route('article.store')}}" method="POST" name="create.article" class="form-default flex flex-col">
        @csrf
        @if (isset($method))
            @method($method)
        @endif
        {{-- <div class="flex flex-row m-2 items-center">
            <label for="title" class="mr-2">Title</label>
            <input type="text" class="form-control form-input" name="title" id="title" placeholder="Title" value="{{ $title ?? null }}">
        </div> --}}
        @include('shared.component.form.title')
        @ckeditor
        @formButtons
    </form>
</div>
