<html>

@section('head')
<head>
<meta name="csrf-token" content ="{{csrf_token()}}">
<script src="{{asset('js/app.js')}}"> </script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
@show


@section('header')
<header>
    <div class="header">
            <nav class="flex items-center justify-between flex-wrap bg-gray-100 p-6">
        <div class="flex items-center flex-shrink-0 text-green-600 mr-6">
                <img src="{{ asset('image/logo.png') }}" alt="Logo image" height="400" width="400">
            <span class="font-semibold text-xl tracking-tight">Home</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-green-600 hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            <a href="/agenda" class="font-semibold block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Agenda
            </a>
            <a href="/tickets" class="font-semibold block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Tickets
            </a>
            <a href="#responsive-header" class="font-semibold block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Colofon
            </a>
            <a href="#responsive-header" class="font-semibold block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Top 10
            </a>
            <a href="#responsive-header" class="font-semibold block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Contact
            </a>
            <a href="/login" class="font-semibold block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Log in/uit
            </a>
            </div>
        </div>
        </nav>
    </div>
</header>
@show

@section('hero')
<div class="flex">
    <div class="h-96 w-full bg-[url('/image/full-width-hero.jpg')] bg-no-repeat">
        <div class="w-1/3 ml-8 mr-60 lg:mt-28 self-end py-2 px-4 bg-white container-sm shadow-xl">
            <span class="my-2 text-teal-600 text-xs p-1">Grootste club van Nederland</span>
            <h2 class="my-2 text-xl">Ben je al klaar voor een keiharde geweldige nacht!</h2>
            <p class="my-2 text-sm">Relaunch laat jou lekker feesten</p>
            <ul class="my-2 text-sm">
                <li class="my-0.2">&#10003; Kan je die dag niet? Geld terug!*</li>
                <li>&#10003; Ben je student? Krijg korting voor tickets en dranken!</li>
                <li>&#10003; 100% veilig feesten</li>
                <li>&#10003; Geweldige line up</li>
                <li>&#10003; 3 Verschillende area's voor al uw muziek</li>
            </ul>
            <span class="my-2 text-teal-600 text-xs p-1">*check onze voorwaarden</span>
        </div>
    </div>
</div>
@stop

@section('content-left')
<div class="flex shadow-xl mb-4">
    <div class="w-1/2 bg-gray-600">
        <h2 class="my-4 px-4 text-white text-2xl">@yield('left-titel')</h2>
        <p class="my-2 px-4 text-white text-sm">@yield('left-content')</p>
    </div>
    <div class="w-1/2 bg-gray-600">
        <div class="my-4 ml-28">@yield('image')</div>
    </div>
</div>
@stop

@section('midle-double')
<div class="flex flex-wrap mb-4">
    <div class="w-1/2 h-72">
        <div class="min-h-full my-4 ml-36 mr-2 bg-gray-100 shadow-xl">
            <h2 class="px-4 text-black text-2xl">@yield('midle-double-title-left')</h2>
            <p class="my-2 px-4 text-gray-800 text-base">@yield('midle-double-content-left')</p>
        </div>
    </div>
    <div class="w-1/2 h-72">
        <div class="min-h-full my-4 mr-36 bg-gray-100 shadow-xl">
                <h2 class="px-4 text-black text-2xl">@yield('midle-double-title-right')</h2>
                <div class="my-2 px-4 text-gray-800 text-base">@yield('midle-double-content-right')</div>
            <!--
            //////////////////////////////////////////
            //////// API/video top 5 gebeuren ////////
            ////////        TOEVOEGEN         ////////
            //////////////////////////////////////////-->
            <div class="flex flex-row">
                <div class="mx-2 my-2 w-1/2 text-center">
                    <div class="h-8 my-2">
                        <img src="{{ asset('image/logo.png') }}">
                    </div>   
                    <h3>Video titel 1</h3>
                </div>

                <div class="mx-2 my-2 w-1/2 text-center">
                    <div class="my-2 max-h-8">
                        <img src="{{ asset('image/logo.png') }}">
                    </div>   
                    <h3>Video titel 2</h3>
                </div>
            </div>
            <div class="flex flex-row">
                <div class="mx-2 my-2 w-1/2 text-center">
                    <div class="my-2 max-h-8">
                        <img src="{{ asset('image/logo.png') }}">
                    </div>   
                    <h3>Video titel 3</h3>
                </div>

                <div class="mx-2 my-2 w-1/2 text-center">
                    <div class="h-8 my-2">
                        <img src="{{ asset('image/logo.png') }}">
                    </div>   
                    <h3>Video titel 4</h3>
                </div>

            </div>
        </div>        
    </div>
</div>
@stop


<br>

@section('footer')
<footer class="shadow-inner	bg-gray-100">
   <div class="max-w-full text-gray-800 flex flex-wrap justify-center">
      <div class="p-5 w-1/4">
         <div class="text-xs uppercase text-green-600 font-medium">Home</div>
         <a class="my-3 block" href="/#">Services</a>
         <a class="my-3 block" href="/#">Products </a>
         <a class="my-3 block" href="/#">About Us <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Pricing <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Partners <span class="text-teal-600 text-xs p-1">New</span></a> 
      </div>
      <div class="p-5 w-1/4 ">
         <div class="text-xs uppercase text-green-600 font-medium">Gebruiker</div>
         <a class="my-3 block" href="/#">Log in <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Nieuw Account <span class="text-teal-600 text-xs p-1"></span></a>
      </div>
      <div class="p-5 w-1/4 ">
         <div class="text-xs uppercase text-green-600 font-medium">Resources</div>
         <a class="my-3 block" href="/#">Documentation <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Tutorials <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Support <span class="text-teal-600 text-xs p-1">New</span></a> 
      </div>
      <div class="p-5 w-1/4 ">
         <div class="text-xs uppercase text-green-600 font-medium">Adres gegevens</div>
         <a class="my-3 block" href="/#">Our Products <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Great Deals <span class="text-teal-600 text-xs p-1">New</span></a>
         <a class="my-3 block" href="/#">Analytics <span class="text-teal-600 text-xs p-1"></span></a>
         <a class="my-3 block" href="/#">Mobile <span class="text-teal-600 text-xs p-1"></span></a> 
      </div>
   </div>
</footer>
@show

</html>