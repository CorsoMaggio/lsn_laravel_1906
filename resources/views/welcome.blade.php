 <x-template title="Homepage">
     <div class="container mt-5">
         <div class="row">
             <!-- LIBRI -->
             <div class="col-md-6">
                 <div class="p-4 bg-light rounded-3">
                     <h2>Libri</h2>
                     <ul class="list-unstyled">
                         @foreach ($books as $book)
                             <li class="mb-3 d-flex align-items-center justify-content-between">

                                 <a href="{{ route('show', $book) }}" class="fw-bold text-decoration-none">
                                     {{ $book->name }}
                                 </a>

                                 @auth
                                     <div class="btn-group btn-group-sm" role="group" aria-label="Azioni libro">
                                         <a href="{{ route('show', $book) }}" class="btn btn-outline-primary">Dettagli</a>
                                         <a href="{{ route('edit', $book) }}" class="btn btn-outline-warning">Modifica</a>

                                         <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                             data-bs-target="#deleteBookModal-{{ $book->id }}">
                                             Elimina
                                         </button>
                                     </div>

                                     <!-- Modal -->>
                                     <div class="modal fade" id="deleteBookModal-{{ $book->id }}" tabindex="-1"
                                         aria-labelledby="deleteBookLabel-{{ $book->id }}" aria-hidden="true">
                                         <div class="modal-dialog">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title" id="deleteBookLabel-{{ $book->id }}">
                                                         Conferma Eliminazione</h5>
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
                                                         <button type="button" class="btn btn-secondary"
                                                             data-bs-dismiss="modal">Annulla</button>
                                                         <button type="submit" class="btn btn-danger">Conferma</button>
                                                     </form>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 @endauth
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>

             <!-- AUTORI -->
             <div class="col-md-6">
                 <div class="p-4 bg-light rounded-3">
                     <h2>Autori</h2>
                     <ul class="list-unstyled">
                         @foreach ($authors as $author)
                             <li class="mb-3 d-flex align-items-center justify-content-between">

                                 <a href="{{ route('authors.show', $author) }}" class="fw-bold text-decoration-none">
                                     {{ $author->name }}
                                 </a>

                                 @auth
                                     <div class="btn-group btn-group-sm" role="group" aria-label="Azioni autore">
                                         <a href="{{ route('authors.show', $author) }}"
                                             class="btn btn-outline-primary">Dettagli</a>
                                         <a href="{{ route('authors.edit', $author) }}"
                                             class="btn btn-outline-warning">Modifica</a>

                                         <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                             data-bs-target="#deleteAuthorModal-{{ $author->id }}">
                                             Elimina
                                         </button>
                                     </div>

                                     <<!-- MODAL PER ELIMINARE -->>
                                         <div class="modal fade" id="deleteAuthorModal-{{ $author->id }}" tabindex="-1"
                                             aria-labelledby="deleteAuthorLabel-{{ $author->id }}" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h5 class="modal-title"
                                                             id="deleteAuthorLabel-{{ $author->id }}">
                                                             Conferma Eliminazione</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                             aria-label="Chiudi"></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         Sei sicuro di voler eliminare
                                                         <strong>{{ $author->name }}</strong>?
                                                     </div>
                                                     <div class="modal-footer">
                                                         <form action="{{ route('authors.destroy', $author) }}"
                                                             method="POST">
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
                                     @endauth
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </x-template>
