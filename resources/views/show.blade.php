<x-template>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>Sei dentro il libro <strong>{{ $book->name }}</strong></p>
    </div>
</x-template>
