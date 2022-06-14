<html>
<head>
@section('head')
<meta name="csrf-token" content ="{{csrf_token()}}">
<script src="{{asset('js/app.js')}}"> </script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@show
</head>
<body>
    @section('header')
    <div class="header">
            <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="{{ asset('image/logo.png') }}" alt="Logo image" height="400" width="400">
            <span class="font-semibold text-xl tracking-tight">Home</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            <a href="/agenda" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Agenda
            </a>
            <a href="/tickets" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Tickets
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Colofon
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Top 10
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Contact
            </a>
            <a href="login" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
                Log in/uit
            </a>
            </div>
        </div>
        </nav>

    </div>
    @show
</body>
</html>