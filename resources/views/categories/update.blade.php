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
        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" value="{{ $category->category }}" class="form-control" name="name">
                @error('name')
                    {{ $message }}
                @enderror

            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </div>
        </form>
    </div>
</x-template>
