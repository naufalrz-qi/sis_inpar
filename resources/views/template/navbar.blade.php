
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
            aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="{{ asset('logo/logo.svg') }}" alt="" width="32px"
                            style="filter: invert(100%);">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-5">
                <li class="nav-item dropdown">
                    <a href="{{ route('login') }}" class="btn btn-light me-2 pt-1">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route('register') }}" class="btn btn-outline-light me-2 pt-1">Register</a>
                </li>
            </ul>
        </div>
    </div>

    </div>
</nav>
