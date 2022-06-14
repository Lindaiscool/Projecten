<header>
    <div class="header shadow-md">
            <nav class="flex items-center justify-between flex-wrap bg-gray-100 p-6">
        <div class="flex items-center flex-shrink-0 text-green-600 mr-6">
            <a href="/"><img src="{{ asset('image/logo.png') }}" alt="Logo image" height="400" width="400"></a>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-md md:text-sm jutify-center place-content-center items-center lg:flex-grow">
            <a href="/agenda" class="self-center font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">
                Agenda
            </a>
            <a href="/upload" class="self-center font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">
                Upload
            </a>
            <a href="/tickets" class="self-center font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">
                Tickets
            </a>
            <a href="/colofon" class="self-center font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">
                Colofon
            </a>
            <a href="/route" class="self-center font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">
                Route
            </a>

                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/user/profile') }}" class="font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="font-semibold block m-4 lg:inline-block lg:mt-0 text-black mr-4">Register</a>
                            @endif
                        @endauth
                @endif

            </div>
        </div>
        </nav>
    </div>
</header>