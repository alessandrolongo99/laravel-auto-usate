<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('cars.index') }}">LARAVEL BRANCH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('cars.index') ? 'active' : "" }}" href="{{ route('cars.index') }}">Cars</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="btn btn-outline-light {{ request()->routeIs('cars.create') ? 'active' : "" }}" href="{{ route('cars.create') }}">Add new comic</a>
                </span>
            </div>
        </div>
    </nav>
</header>