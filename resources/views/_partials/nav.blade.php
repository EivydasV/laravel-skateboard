<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('skateboards.create')}}">Create Skateboard</a></li>

                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
                <li class="nav-item"><a class="nav-link" href="{{route('skateboards.index')}}">Skateboards</a></li>
            </ul>
        </div>
    </div>
</nav>
