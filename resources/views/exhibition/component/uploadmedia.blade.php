<form method="POST" action="{{$action}}" enctype="multipart/form-data" accept-charset="UTF-8" class="flex flex-row justify-between border border-grey p-2">
    @csrf
    <div class="flex flex-row m-2 items-center flex-1">
        <label for="files" class="mr-2">Section Media</label>
        <input type="file" multiple name="files[]" id="files"  class="form-control form-input flex-1" required />
    </div>
    <div class="m-2">
        <button class="button button-orange" type="submit">Upload Images</button>
    </div>
</form>