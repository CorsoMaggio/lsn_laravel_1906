<x-template>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($books as $book)
           <li>
    {{ $book->name }} {{ $book->years }} |
    <a href="{{ route('show', $book) }}">Vedi dettagli</a> |
    <a href="{{ route('edit', $book) }}">Modifica</a> |

    
    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $book->id }}">
        Elimina
    </button>

    <!-- Modal che scatta scegliendo "Elimina" -->
    <div class="modal fade" id="deleteModal-{{ $book->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $book->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel-{{ $book->id }}">Conferma Eliminazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare? <strong>{{ $book->name }}</strong>?
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
</li>
        @endforeach
    </ul>
</x-template>
