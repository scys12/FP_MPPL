<nav class="navbar navbar-expand-lg fixed-top navbar-light py-2 shadow-sm"   style="background-color:white">
    <div class="container">
        <a style="font-size: 24px;color:var(--gray)" class="navbar-brand font-weight-bolder" href="{{ url('/') }}">
            Primalangga
        </a>
        <button style="color: var(--gray)" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('promo') }}">{{ __('Promo') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('how_to_transfers') }}">{{ __('Cara Pembayaran') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('our_products') }}">{{ __('Produk Kami') }}</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item mx-2" id="login-navbar">
                        <a style="border:1px solid var(--warning);color:var(--warning)" class="btn pr-3 pl-3 btn-outline-primary my-2 my-lg-0 nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a style="border: 1px solid var(--warning);background-color:var(--warning);color:var(--white)" class="btn btn-outline-primary py-2 px-4 nav-link my-2 my-lg-0" href="{{ route('register') }}">{{ __('Daftar Sekarang') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="far fa-user"></i>
                            {{ Auth::user()->username }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Beli Paket') }}</a>
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
<main class="py-4">
    <div style="margin-top:50px">
        @yield('content')
    </div>
</main>