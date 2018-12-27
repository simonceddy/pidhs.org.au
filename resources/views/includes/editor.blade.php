<fieldset class="form-group row">
    <div class="col-sm-10">

        <label for="editor">Article Content</label>
        <textarea name="content" id="editor" placeholder="The HTML content of the article" maxlength="100000" style="height: 30em;">
            @if (isset($content))
                {{ $content }}
            @endif
        </textarea>
    </div>
</fieldset>


@push('scripts')
<script src="/js/editor.js"></script>
@endpush
