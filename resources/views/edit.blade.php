 <x-template>
     <div class="container">
         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
         <form action="{{ route('update', ['book' => $book->id]) }}" method="POST">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label for="" class="form-label">Titolo</label>
                 <input type="text" value="{{ $book->name }}" class="form-control" name="name">
                 @error('name')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Anno</label>
                 <input type="text" value="{{ $book->years }}" class="form-control" id="exampleFormControlInput3"
                     name="years" placeholder="">
                 @error('years')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Pagine</label>
                 <input type="text" value="{{ $book->pages }}" class="form-control" id="exampleFormControlInput3"
                     name="pages" placeholder="">
                 @error('pages')
                     {{ $message }}
                 @enderror
             </div>

             <div class="col-12">
                 <button type="submit" class="btn btn-primary">Aggiorna</button>
             </div>
         </form>
     </div>
 </x-template>