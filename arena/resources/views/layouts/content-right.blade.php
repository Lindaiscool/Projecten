<div class="bg-gray-600 shadow-xl">
    <div class="flex">
        <div class="row">
            <div class="flex flex-col items-center flex-1 md:flex-col lg:flex-row">

                <div class="flex items-center w-1/2">
                    <div class="my-4 md:w-full md:my-2 md:px-6">
                        <div class="mr-0 place-content-center">@yield('right-image')</div>
                    </div>
                </div>

                
                <div class="flex items-center w-1/2">
                    <div class="my-4 mr-6 md:w-auto md:my-2">
                        <h2 class="my-4 text-white text-2xl">@yield('right-titel')</h2>
                        <p class="my-2 text-white text-sm">@yield('right-content')</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>