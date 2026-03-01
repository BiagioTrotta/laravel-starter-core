<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm">
    <div class="container">

        {{-- Brand --}}
        <a class="navbar-brand fw-bold text-primary" href="{{ route('homepage') }}">
            {{ config('app.name') }}
        </a>

        {{-- Toggle --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMain"
            aria-controls="navbarMain"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="navbarMain">

            {{-- Left links --}}
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('homepage') ? 'active fw-semibold' : '' }}"
                        href="{{ route('homepage') }}">
                        Home
                    </a>
                </li>

                @auth
                @if(auth()->user()->email === 'admin@example.com')
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.*') ? 'active fw-semibold' : '' }}"
                        href="{{ route('admin.users.index') }}">
                        Admin
                    </a>
                </li>
                @endif
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Altro
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else</a></li>
                    </ul>
                </li>

            </ul>

            {{-- Right auth --}}
            <ul class="navbar-nav ms-auto align-items-lg-center">

                @auth
                <li class="nav-item me-3 small text-muted">
                    Ciao, <span class="fw-semibold">{{ auth()->user()->name }}</span>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            Logout
                        </button>
                    </form>
                </li>
                @else

                <li class="nav-item me-2">
                    <a class="btn btn-sm btn-primary" href="{{ route('login') }}">
                        Login
                    </a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('register') }}">
                        Registrati
                    </a>
                </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>