<div>
    @if ($exhibition->media_id === $item->id)
        Current Exhibition Cover Image
    @else
        <form method="POST" action="{{route('exhibitions.cover', [
            $exhibition,
            $item
        ])}}">
            @csrf
            @method('PUT')
            <button class="button button-green" type="submit">Make Exhibition Cover Image</button>
        </form>
    @endif
</div>