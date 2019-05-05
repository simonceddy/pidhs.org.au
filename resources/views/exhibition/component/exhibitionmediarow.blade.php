<div class="flex flex-row justify-between m-4">
    <div>
        <img src="@sectionThumb({{$item->thumbnail}})" class="collection-thumbnail">
    </div>
    <div>
        @if ($item->section()->first())
            Section: {{$item->section()->first()->title}}
        @endif
    </div>
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
                <button class="bg-green-light" type="submit">Make Exhibition Cover Image</button>
            </form>
        @endif
    </div>
    <div>
    @include('exhibition.component.deletemedia', [
        'action' => route('media.destroy', $item)
    ])
    </div>
</div>