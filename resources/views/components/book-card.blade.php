<div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
    <div class="card shadow-sm" style="width: 100%; max-width: 300px;">
        <div class="card-body text-center">
            <h5 class="card-title">
                <a href="{{ route('show', $book) }}" class="text-decoration-none fw-bold">
                    {{ $book->name }}
                </a>
            </h5>
            <p class="card-text">
                Anno: {{ $book->years }}<br>
                Pagine: {{ $book->pages }}
            </p>

            @auth
                <div class="btn-group btn-group-sm">
                    <a href="{{ route('show', $book) }}" class="btn btn-outline-primary">Dettagli</a>
                    <a href="{{ route('edit', $book) }}" class="btn btn-outline-warning">Modifica</a>
                    <button class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteBookModal-{{ $book->id }}">Elimina</button>
                </div>

                <div class="modal fade" id="deleteBookModal-{{ $book->id }}" tabindex="-1"
                    aria-labelledby="deleteBookLabel-{{ $book->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteBookLabel-{{ $book->id }}">
                                    Conferma Eliminazione
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Chiudi"></button>
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
    </div>
</div>
