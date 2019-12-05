<form action="{{ $action }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="button button-danger" onclick="return confirm('Confirm delete? This action cannot be undone.')">Delete</button>
</form>