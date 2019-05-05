<form method="POST" action="{{$action}}" class="form-default" enctype="multipart/form-data" accept-charset="UTF-8">
    @csrf
    <div class="flex flex-row m-2 items-center">
        <label for="files" class="mr-2">Section Media</label>
        <input type="file" multiple name="files[]" id="files"  class="form-control form-input flex-1" required />
    </div>
    <div>
        <button class="submit-button" type="submit">Upload Images</button>
    </div>
</form>