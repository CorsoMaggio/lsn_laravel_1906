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
        <form action="{{ route('authors.update', ['author' => $author->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" value="{{ $author->name }}" class="form-control" name="name">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Anno di Nascita</label>
                <input type="text" value="{{ $author->dob }}" class="form-control" id="exampleFormControlInput3"
                    name="dob" placeholder="Data di nascita">
                @error('dob')
                    {{ $message }}
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </div>
        </form>
    </div>
</x-template>
