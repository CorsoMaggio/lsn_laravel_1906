<x-template>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="d-flex justify-center mb-auto">

            <div class="col-auto">
                <label for="inputUsername" class="visually-hidden">Username</label>
                <input type="text" class="form-control" id="inputUsername" name="name">
            </div>
            <div class="col-auto">
                <label for="inputEmail" class="visually-hidden">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email"
                    placeholder="email@example.com">
            </div>
            <div class="col-auto">
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Password Confirmation</label>
                <input type="password" class="form-control" id="inputPassword2" name="password_confirmation"
                    placeholder="Confirm Password">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm</button>
            </div>
            <hr>
            <div class="col-auto">
                <a href="{{ route('login') }}" class="btn btn-secondary mb-3">Sei Registrato? Clicca qui</a>
            </div>

        </div>
    </form>


</x-template>
