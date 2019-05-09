<div>
    @if ($section->media_id === $item->id)
        Current Section Cover Image
    @else
        <form method="POST" action="{{route('section.cover', [
            $exhibition,
            $section,
            $item
        ])}}">
            @csrf
            @method('PUT')
            <button class="button button-blue" type="submit">Make Section Cover Image</button>
        </form>
    @endif
</div>