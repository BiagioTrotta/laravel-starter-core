<footer class="mt-auto border-top bg-light">
    <div class="container py-4">

        <div class="row align-items-center text-center text-md-start">

            {{-- Brand --}}
            <div class="col-md-4 mb-3 mb-md-0">
                <span class="fw-semibold text-primary">
                    Laravel Starter Core
                </span>
            </div>

            {{-- Links --}}
            <div class="col-md-4 mb-3 mb-md-0 text-center">
                <a href="/" class="text-decoration-none text-muted mx-2">Home</a>

                @guest
                <a href="{{ route('login') }}" class="text-decoration-none text-muted mx-2">Login</a>
                <a href="{{ route('register') }}" class="text-decoration-none text-muted mx-2">Register</a>
                @endguest

                @auth
                <span class="text-muted mx-2 small">
                    {{ auth()->user()->email }}
                </span>
                @endauth
            </div>

            {{-- Info --}}
            <div class="col-md-4 text-md-end small text-muted">
                Laravel {{ app()->version() }} · PHP {{ phpversion() }}
            </div>

        </div>

    </div>
</footer>