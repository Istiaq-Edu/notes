<x-layout>
    <div class="note-container">
        <a href="{{ route('notes.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30)  }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('notes.show', $note) }}" class="note-show-button">View</a>
                        <a href="{{ route('notes.edit', $note) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
