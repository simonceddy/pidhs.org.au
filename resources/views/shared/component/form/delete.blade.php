<div class="my-4">
    <form action="{{ $action }}" method="POST">
        @csrf
        @method('DELETE')
        {{-- fix onclick!!!! --}}
        <button type="submit" class="delete-button" onclick="return confirm('Confirm delete? This action cannot be undone.')">Delete</button>
    </form>
</div>