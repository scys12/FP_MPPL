<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span>PRIMALANGGA.</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item"><a href="{{route('our_products')}}" class="nav-link"><span>Products</span></a></li>
            <li class="nav-item"><a href="{{route('freemalangga')}}" class="nav-link"><span>Freemalangga</span></a></li>
            @guest
                <li class="nav-item cta mr-2"><a href="{{route('login')}}" class="nav-link" style="border: 0.2px solid #2e9e5b !important;">Login</a></li>
                <li class="nav-item cta"><a href="{{route('register')}}" class="nav-link" style="background: white;color: black !important;border: 0.2px solid #2e9e5b !important;">Register</a></li>
            @else
                <li class="nav-item"><a href="{{route('freemalangga')}}" class="nav-link"><span>Belajar Mandirit</span></a></li>
                <li class="nav-item"><a href="{{route('freemalangga')}}" class="nav-link"><span>Kelas Private</span></a></li>

                <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="far fa-user"></i>
                    {{ Auth::user()->username }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                    <a class="dropdown-item" href="{{ route('packet.buy') }}">{{ __('Beli Paket') }}</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')