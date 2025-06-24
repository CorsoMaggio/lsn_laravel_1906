<x-template>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>

        
    @endif

    <ul>
        @foreach ($authors as $author)
               
            <li>
                {{ $author->name }} {{ $author->dob }} |
                <a href="{{ route('authors.show', $author) }}">Vedi dettagli</a> |
                <a href="{{ route('authors.edit', $author) }}">Modifica</a> |


                <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal-{{ $author->id }}">
                    Elimina
                </button>

                <!-- Modal che scatta scegliendo "Elimina" -->
                <div class="modal fade" id="deleteModal-{{ $author->id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel-{{ $author->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel-{{ $author->id }}">Conferma Eliminazione
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Chiudi"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare? <strong>{{ $author->name }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('authors.destroy', $author) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>
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
