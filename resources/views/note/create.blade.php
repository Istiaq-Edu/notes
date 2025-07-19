<x-layout>
    <div class="note-container single-note">
        <h1>Create New Note</h1>
        <form action="{{ route('notes.store') }}" method="post" class="note">
            @csrf
            <!-- Cross-Site Request Forgery -->
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('notes.index') }}" class="note-cancel-button">Cancel</a>
                <button type="submit" class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>