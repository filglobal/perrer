<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Lending</title>
    @livewireStyles
</head>
<body class="bg-gray-100"> 

    <x-navbar></x-navbar>

    @yield('content')

    <x-footer></x-footer>
    
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('scripts')
    @yield('scripts')
</body>
</html>