<x-template>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->category }}
                <a href="{{ route('categories.show', $category) }}">Vedi dettagli</a> |
                <a href="{{ route('categories.edit', $category) }}">Modifica</a> |

                <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal-{{ $category->id }}">
                    Elimina
                </button>

                <!-- Modal -->
                <div class="modal fade" id="deleteModal-{{ $category->id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel-{{ $category->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel-{{ $category->id }}">Conferma Eliminazione
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Chiudi"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare? <strong>{{ $category->category }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('categories.destroy', $category) }}" method="POST">
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
