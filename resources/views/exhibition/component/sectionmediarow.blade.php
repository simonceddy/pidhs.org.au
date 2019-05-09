<div class="flex flex-row justify-between m-4">
    <div>
        <img src="@sectionThumb({{$item->thumbnail}})" class="collection-thumbnail">
    </div>
    @include('exhibition.component.sectioncover')
    @include('exhibition.component.exhibitioncover')
    
    <div>
    @include('exhibition.component.deletemedia', [
        'action' => route('media.destroy', $item)
    ])
    </div>
</div>