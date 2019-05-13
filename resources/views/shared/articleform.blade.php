<div class="container">
<form action="{{$action ?? route('article.store')}}" method="POST" name="create.article" class="form-default flex flex-col">
        @csrf
        @if (isset($method))
            @method($method)
        @endif
        @include('shared.component.form.title')
        @ckeditor
        @formButtons
    </form>
</div>
