<x-template>
    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        Elimina
    </button>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare {{ $book->name }}?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('destroy', ['book' => $book->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-danger">Conferma</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-template>
