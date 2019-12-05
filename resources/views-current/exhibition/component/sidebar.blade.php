<div class="text-sm flex flex-col w-1/5">
    {{-- sidebar --}}
    @foreach ($sections as $section)
        <span>{{$section->title}}</span>
    @endforeach
</div>
