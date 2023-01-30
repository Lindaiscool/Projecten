<body class="antialiased">

    <nav class="navbar navbar-expand-sm bg-black navbar-dark">
        <a class="navbar-brand" href="/"><img height="40px" width="40px" src="/pics/spotify.png"></a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                        <a href="/" class="nav-link" id="nav">Muziek</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="kies nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ik
                        </a>
                        <div class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-muted" href="/over">Mijn muziek</a>
                            <a class="dropdown-item text-muted" href="/contact">contact</a>
                        </div>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="loguit">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit(); "
                                    role="button">
                                    <i class="fas fa-sign-out-alt"></i>

                                    {{ __('Log uit') }}
                                </a>
                            </div>
                        </form>
                    </li>
                @endauth
            </ul>
            @if (Route::has('login'))
                <div class="nav-link">
                    @auth
                        <li class="logo2 ms-3"><a class="text-muted" href="/">
                                <div class=logo></div>
                            </a></li>
                    @else
                        <div class="log-reg">
                            <a href="{{ route('login') }}"
                                class="login text-sm text-gray-700 dark:text-gray-500 underline"><i
                                    class="fas fa-sign-in-alt"></i> Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="registreer ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registreer</a>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
        </div>
    </nav>
