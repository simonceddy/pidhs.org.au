<div class="my-4">
    <form action="{{ $action }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="button-danger button" onclick="return confirm('Confirm delete? This action cannot be undone.')">Delete</button>
    </form>
</div>