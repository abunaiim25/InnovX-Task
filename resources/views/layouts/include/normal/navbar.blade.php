<div class="menu-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top ">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('normal.home') }}">
                InnovX<span class="text-primary">Task</span>
            </a>

            <!-- Navbar Toggle for Small Screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('normal.home') }}"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('normal.task') }}"><b>Task</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('normal.about') }}"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('normal.contact') }}"><b>Contact</b></a>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <b>{{ Auth::user()?->name }}</b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

