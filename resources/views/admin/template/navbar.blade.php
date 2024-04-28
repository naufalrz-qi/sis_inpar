<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('logo/logo.svg') }}" alt="" width="32px" style="filter: invert(100%);">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
            aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dataDestinationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">Data Destinations</a>
                    <ul class="dropdown-menu" aria-labelledby="dataDestinationsDropdown">
                        <li><a class="dropdown-item" href="{{ route('add.destination') }}">Add data</a></li>
                        <li><a class="dropdown-item" href="{{ route('view.destinations') }}">View datas</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dataOrdersDropdown" data-bs-toggle="dropdown" aria-expanded="false">Data Orders</a>
                    <ul class="dropdown-menu" aria-labelledby="dataOrdersDropdown">
                        <li><a class="dropdown-item" href="#">Add data</a></li>
                        <li><a class="dropdown-item" href="#">View datas</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dataUserDropdown" data-bs-toggle="dropdown" aria-expanded="false">Data User</a>
                    <ul class="dropdown-menu" aria-labelledby="dataUserDropdown">
                        <li><a class="dropdown-item" href="#">Add data</a></li>
                        <li><a class="dropdown-item" href="#">View datas</a></li>
                    </ul>
                </li>

                @if (Route::has('login'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="others" data-bs-toggle="dropdown" aria-expanded="false">Others</a>
                        <ul class="dropdown-menu" aria-labelledby="others">
                            @auth
                                <li>
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">Log Out</a>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
