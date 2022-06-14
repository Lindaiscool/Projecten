<div class="flex grow">
    <div class="flex flex-col items-center my-4 md:flex-col lg:flex-row">

                <div class="flex items-center w-2/5 lg:ml-32">
                    <div class="my-4 px-4 md:my-2 md:px-2">
                        <h2 class="px-4 text-black text-2xl">@yield('midle-double-title-left')</h2>
                        <p class="my-2 px-4 text-gray-800 text-base">@yield('midle-double-content-left')</p>
                    </div>
                </div>

                <div class="flex items-center w-2/5">
                    <div class="my-4 px-4 md:my-2 md:px-2">
                        <h2 class="px-4 text-black text-2xl">@yield('midle-double-title-right')</h2>
                        <div class="my-2 px-4 text-gray-800 text-base">@yield('midle-double-content-right')</div>

                        <div class="flex flex-col lg:flex-row">
                                <div class="flex mx-2 my-6 lg:w-1/2 text-center">
                                    <div class="h-8 my-2">
                                        <img src="{{ asset('image/logo.png') }}">
                                        <h3 class="flex flex-col my-4">Video titel 1</h3>
                                    </div>   
                                </div>

                                <div class="flex mx-2 my-6 lg:w-1/2 text-center">
                                    <div class="my-2 max-h-8">
                                        <img src="{{ asset('image/logo.png') }}">
                                        <h3 class="flex flex-col my-4">Video titel 2</h3>
                                    </div>   
                                </div>
                        </div>

                    </div>
                </div>

    </div>
</div>