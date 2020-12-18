@extends('exhibition.layout.app')

@section('title', 'Exhibitions')

@section('content')
<div>
    <form method="POST" action="{{route('section.update', [$exhibition, $id])}}" class="form-default" enctype="multipart/form-data" accept-charset="UTF-8">
        @csrf
        @method('PATCH')
        @include('shared.component.form.title')

        {{-- section media - todo: magnaging media --}}
        @if ($media)
        <div class="flex flex-col m-2">
            @foreach ($media as $item)
                @if ($item)
                <div class="flex flex-row justify-around items-center">
                    <img src="@sectionThumb({{$item->thumbnail}})" class="collection-thumbnail">
                    <span class="flex-1 ml-4">{{$item->thumbnail}}</span>
                </div>
                @endif
            @endforeach
        </div>
            
        @endif

        <div class="flex flex-row m-2 items-center">
            <label for="files" class="mr-2">Add Media</label>
            <input type="file" multiple name="files[]" id="files"  class="form-control form-input flex-1" />
        </div>

        @ckeditor
        <div class="flex flex-row m-2 justify-around">
            @submit(['label' => 'Save'])
            @cancel(['action' => route('section.show', [$exhibition, $id])])
        </div>
    </form>
    @include('shared.component.form.delete', [
        'action' => route('section.destroy', [$exhibition, $id])
    ])
</div>
@endsection
