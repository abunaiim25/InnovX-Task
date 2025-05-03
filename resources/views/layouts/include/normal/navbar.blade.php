<div class="menu-bar">
    <h1 class="logo">InnovX<span>Task</span></h1>
    <ul>
        <li><a href="{{ route('normal.home') }}">Home</a></li>
        <li><a href="{{ route('normal.about') }}">About</a></li>
        <li><a href="{{ route('normal.contact') }}">Contact</a></li>


        @if (Route::has('login'))
            @auth
                <li><a href="#">{{ Auth::user()?->name }}
                    <i class="fas fa-caret-down"></i></a>

                    <div class="dropdown-menu">
                        <ul>
                            {{-- <li><a href="{{ route('profile.edit') }}">Profile</a></li> --}}
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>

                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        @endif
    </ul>
</div>


