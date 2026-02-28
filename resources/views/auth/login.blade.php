<x-layout.app title="Login">
    <x-slot:title>Login</x-slot:title>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow rounded-4 p-5 w-100" style="max-width: 480px;">

            <div class="text-center mb-4">
                <h1 class="h4 fw-bold text-primary">Accesso al Template</h1>
                <p class="text-muted small">
                    Inserisci le credenziali per accedere all’area autenticata.
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="you@example.com"
                        required
                        autofocus>
                    @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="••••••••"
                        required>
                    @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">
                        Accedi
                    </button>
                </div>
            </form>

            <div class="text-center mt-4 small">
                <span class="text-muted">Non hai un account?</span>
                <a href="{{ route('register') }}" class="text-primary fw-semibold">
                    Registrati
                </a>
            </div>

        </div>
    </div>
</x-layout.app>