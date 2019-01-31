<form action="{{ $action }}" method="POST">
    @csrf
    @method('DELETE')
    {{-- fix onclick!!!! --}}
    <button type="submit" class="btn btn-danger" onclick="confirm('Confirm delete? This action cannot be undone.')">Delete</button>
</form>
