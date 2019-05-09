<div class="flex flex-row justify-between m-4">
    <div>
        <img src="@sectionThumb({{$item->thumbnail}})" class="collection-thumbnail">
    </div>
    <div>
        @if ($item->section()->first())
            Section: {{$item->section()->first()->title}}
        @endif
    </div>
    @include('exhibition.component.exhibitioncover')
    <div>
    @include('exhibition.component.deletemedia', [
        'action' => route('media.destroy', $item)
    ])
    </div>
</div>