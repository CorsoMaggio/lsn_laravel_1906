<nav class="navbar navbar-expand-lg"
    style="background-image: url('https://picsum.photos/id/870/200/300?grayscale&blur=2'); background-size: cover; background-position: center;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Link Utili</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ route('index')}}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('create')}}">Salva libro</a>

                </li>
            </ul>
        </div>
    </div>
</nav>
