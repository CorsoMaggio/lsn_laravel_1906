<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Home</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Libri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create') }}">Aggiungi Libro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('createauthor') }}">Aggiungi Autore</a>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest
            </ul>

            @auth
                <span class="navbar-text me-2">
                    Ciao, <strong>{{ Auth::user()->name }}!</strong>
                </span>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">Log Out</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
