<x-template>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($authors as $author)
            <li>
                {{ $author->name }} ({{ $author->dob }}) |
                <a href="{{ route('showauthor', $author) }}">Dettagli</a>
            </li>
        @endforeach
    </ul>
</x-template>
