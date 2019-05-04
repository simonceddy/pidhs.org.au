<div class="flex flex-row justify-between">
    <div>
        <img src="@sectionThumb({{$item->thumbnail}})" class="collection-thumbnail">
    </div>
    <div>
        {{-- filename? --}}
    </div>
    <div>
    @include('exhibition.component.deletemedia', [
        'action' => route('media.destroy', $item)
    ])
    </div>
</div>