<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary-emphasis" style="letter-spacing: 4px" href="{{ route('home') }}">
            <img src="{{ asset('assets/icons/logo.png') }}" alt="Icons" sizes="30">
            {{ $title ?? config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-primary-emphasis fw-bold" wire:navigate aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" wire:navigate href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" wire:navigate href="#">Blog</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <button class="btn btn-primary rounded-4 fw-bold">
                            Log In <i class="bi bi-arrow-right"></i>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
