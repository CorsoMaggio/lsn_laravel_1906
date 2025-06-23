<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand" href="{{ route('welcome') }}">Libreria</a>

    <div class="ms-auto d-flex align-items-center gap-3">
        @auth
            <span class="text-muted">Ciao, <strong>{{ Auth::user()->email }}</strong></span>

            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">Log Out</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Accedi</a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registrati</a>
        @endauth

        @auth
            <a href="{{ route('index') }}" class="btn btn-outline-secondary btn-sm">Gestisci Libri</a>
        @endauth
    </div>
</nav>
