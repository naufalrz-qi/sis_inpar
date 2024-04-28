<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <a class="nav-link active" aria-current="page" href="/">
            <img src="{{ asset('logo/logo.svg') }}" alt="" width="32px" style="filter: invert(100%);">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
            aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#destinations">Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>


            </ul>

            @if (Route::has('login'))
                <ul class="navbar-nav justify-content-end">
                    @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                                    class="btn btn-light mt-sm-n3">Log Out</a>
                            </form>

                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="btn btn-outline-warning">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif

        </div>
    </div>


</nav>
