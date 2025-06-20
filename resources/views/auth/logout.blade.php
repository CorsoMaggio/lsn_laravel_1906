<x-template>
    <x-navbar/>
    @auth
        <p>Ciao, {{ Auth::user()->email }}</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
    @else
        <a href="{{ route('login') }}">Accedi</a>
        <a href="{{ route('register') }}">Registrati</a>
    @endauth
</x-template>
