<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-no-repeat" style="background-image: url(pics/bg1.png); background-size: 100% 100%;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background-color: rgba(24, 24, 24, 0.664);">
        {{ $slot }}
    </div>
</div>
