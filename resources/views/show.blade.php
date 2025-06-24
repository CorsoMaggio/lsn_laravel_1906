<x-template>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Dettagli del libro</h2>
        <p><strong>Nome:</strong> {{ $book->name }}</p>
        <p><strong>Pagine:</strong> {{ $book->pages }}</p>
        <p><strong>Anno di pubblicazione:</strong> {{ $book->years }}</p>
        @if ($book->author)
            <p><strong>Autore:</strong>
                <a href="{{ route('authors.show', $book->author) }}">
                    {{ $book->author->name }}
                </a>
            </p>
      
        @endif

        @auth
            <a href="{{ route('edit', $book) }}" class="btn btn-warning">Modifica</a>

            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina
            </button>


            <a href="{{ route('index') }}" class="btn btn-secondary">Torna alla lista</a>


            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare <strong>{{ $book->name }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('destroy', $book) }}" method="POST">
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
