<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Salva Libri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <x-navbar>

        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div>
            @endif
            <h1>Book info</h1>

            <form method="POST" action={{ 'route(store)' }}>
                @csrf

                <div>
                    <label for="name" class="form-label">Name of the book</label>
                </div>
                <input name="name" value="{{ old('name') }}" class="form-control" id="name"
                    placeholder="Book Name">
                @if ($errors->any())
                    <div class="alert alert-danger">

                        @error('name')
                            {{ $message }}
                        @enderror

                    </div>
                @endif

                <div class>
                    <label for="years" aria-required="" class="form-label">Publishing Year</label>
                    <input name="years" class="form-control" id="years" placeholder="Year">
                </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">

                @error('year')
                    {{ $message }}
                @enderror

            </div>
        @endif
        <div>
            <label for="pages" class="form-label">Pages</label>
        </div>
        <input name="pages" value="{{ old('pages') }}" class="form-control" id="pages" placeholder="pages">
        @if ($errors->any())
            <div class="alert alert-danger">

                @error('pages')
                    {{ $message }}
                @enderror

            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg> {{ session('success') }}
                <div>
                    Libro salvato!</div>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Send Message</button>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
        </script>
</body>

</html>
