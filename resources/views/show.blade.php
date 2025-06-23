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

        <div class="d-flex gap-3 mt-3">
            <a href="{{ route('edit', $book) }}" class="btn btn-warning">Modifica</a>
            <a href="{{ route('destroy', $book) }}" class="btn btn-danger">Elimina</a>
            <a href="{{ route('index') }}" class="btn btn-secondary">Torna alla lista</a>
        </div>
    </div>
</x-template>
