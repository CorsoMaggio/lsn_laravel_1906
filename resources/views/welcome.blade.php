<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libreria

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>

    <x-template title="Homepage">
        <div class="container mt-5">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">La nostra libreria</h1>

                    <ul class="fs-5">
                        @foreach ($books as $book)
                            <li>
                                @auth
                                    <a href="{{ route('show', $book) }}" class="text-decoration-none fw-bold">
                                        {{ $book->name }}
                                    </a><br>
                                    <div>
                                        Pagine: {{ $book->pages }}<br>
                                        Anno di pubblicazione: {{ $book->years }}
                                    </div>
                                @else
                                    <strong>{{ $book->name }}</strong>
                                @endauth
                            </li>
                        @endforeach
                    </ul>

                    @guest
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-4">
                            Registrati per vedere i dettagli dei libri
                        </a>
                    @endguest
                </div>
            </div>
        </div>

        
    </x-template>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
