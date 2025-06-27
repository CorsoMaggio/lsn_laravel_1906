<x-template>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Dettagli</h2>
        <p><strong>Nome:</strong> {{ $category->category }}</p>

        @auth
            <a href="{{ route('categories.edit', $author) }}" class="btn btn-warning">Modifica</a>

            <!--Modal -->
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Torna alla lista</a>

            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare <strong>{{ $category->category }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('categories.destroy', $author) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <button type="submit" class="btn btn-danger">Conferma</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
</x-template>
