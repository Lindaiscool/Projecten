<footer class="shadow-inner mt-6 bg-gray-100">
    <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-10 xl:gap-15">
            
        <div class="flex flex-col py-4 items-center md:flex-col sm:flex-row">
            <div class="text-xs uppercase text-green-600 font-medium">Pagina's</div>
            <a class="my-3 block" href="/">Home</a>
            <a class="my-3 block" href="/agenda">Agenda</a>
            <a class="my-3 block" href="/upload">Upload</a>
            <a class="my-3 block" href="/ticket">Tickets</a>
            <a class="my-3 block" href="/colofon">Colofon</a> 
            <a class="my-3 block" href="/route">Route</a> 
        </div>

        <div class="flex flex-col py-4 items-center md:flex-col sm:flex-row">
            <div class="text-xs uppercase text-green-600 font-medium">Account</div>
            @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/user/profile') }}" class="my-3 block">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="my-3 block">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="my-3 block">Register</a>
                            @endif
                        @endauth
                @endif
        </div>

        <div class="flex flex-col py-4 items-center md:flex-col sm:flex-row">
            <div class="flex flex-shrink-0 mb-2">
                <a href="/"><img src="{{ asset('image/logo-small.png') }}" alt="Logo image" height="" width="300"></a>
            </div>
            <div class="text-xs uppercase text-green-600 font-medium">Contact</div>
            <p>Adres: Arena Boulevard 1</p>
            <p>Postbus: 22891</p>
            <p>T: <a class="text-green-600" href="tel:020-311-1333">020-311 1333</a></p>
            <p>F: <a class="text-green-600" href=“fax:020-311-1380”>020-311 1380</a></p>
        </div>

        <div class="flex flex-col p-4 items-center md:flex-col sm:flex-row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.0945903416255!2d4.93859781552928!3d52.31428605920687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60b96fed81d7f%3A0x27f19aa6529494a2!2sJohan%20Cruijff%20Boulevard%201%2C%201101%20AX%20Amsterdam!5e0!3m2!1sen!2snl!4v1652862759577!5m2!1sen!2snl" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>



    </div>
</footer>