<div class="min-h-screen flex flex-col items-center sm:pt-0">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-16 w-16">

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
