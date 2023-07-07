<!-- My CSS -->
<link rel="stylesheet" href="{{ asset('css/css/style.css') }}" />

<nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/hijau.png') }}"alt=".." height="50rem"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('sigbs.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pemetaan">Pemetaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#banksampah">Banksampah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
