<fieldset class="form-group row">
    <div class="col-sm-10">

        <label for="{{$editor_name ?? 'content'}}">{{$editor_title ?? 'Article Content'}}</label>
        <textarea name="{{$editor_name ?? 'content'}}" id="{{$editor_id ?? 'editor'}}" placeholder="The HTML content of the article" maxlength="100000">
            @if (isset($content))
                {{ $content }}
            @endif
        </textarea>
    </div>
</fieldset>


@push('scripts')
<script src="/js/editor.js"></script>
@endpush
