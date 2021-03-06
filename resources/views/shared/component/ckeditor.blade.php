<div class="m-2">
    <label for="{{$editor_name ?? 'content'}}">{{$editor_title ?? 'Article Content'}}</label>
    <textarea name="{{$editor_name ?? 'content'}}" id="{{$editor_id ?? 'editor'}}" placeholder="The HTML content of the article" maxlength="100000">
        @if (isset($content))
            {{ $content }}
        @endif
    </textarea>
</div>

@push('scripts')
{{-- <script src="/js/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#{{$editor_id ?? 'editor'}}'
    });
</script> --}}
<script src="/js/old-editor.js"></script>
@endpush
