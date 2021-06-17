<div>
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-3">
            <div class="flex justify-between">
    
                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="{{ route('welcome') }}" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <img src="{{ asset('images/logo.png') }}" class="h-12 w-12" alt="fil-global-logo">
                            <span class="font-bold hover:text-indigo-500 ml-5">Home</span>
                        </a>
                    </div>
    
                    <!-- primary nav -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('contact') }}"
                            class="py-5 px-3 font-bold hover:text-indigo-500 text-gray-700 hover:text-gray-900">Contact us</a>
                        <a href="{{ route('about') }}"
                            class="py-5 px-3 font-bold hover:text-indigo-500 text-gray-700 hover:text-gray-900">About us</a>
                </div>
                </div>
    
                <!-- secondary nav -->
                @guest
    
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('login') }}" class="py-5 px-3 font-bold hover:text-indigo-500">Log in</a>
                    <a href="{{ route('register') }}" class="py-2 px-3 bg-indigo-500 text-white hover:bg-indigo-600 rounded transition duration-300">Sign
                        up</a>
                </div>
    
                @else
                <div class="hidden md:flex items-center space-x-1">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center font-bold text-sm hover:text-indigo-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
    
                @endguest
                
    
                <!-- mobile button goes here -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg class="hamburger-menu w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="close-menu hidden h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
    
            </div>
        </div>
    
        <!-- mobile menu -->
        <div class="mobile-menu flex flex-col items-center hidden md:hidden">
            <a href="{{ route('welcome') }}" class="block py-3 px-4 text-lg hover:text-indigo-500 uppercase font-bold">Home</a>
            <a href="{{ route('about') }}" class="block py-3 px-4 text-lg hover:text-indigo-500 uppercase font-bold">About us</a>
            <a href="{{ route('contact') }}" class="block py-3 px-4 text-lg hover:text-indigo-500 uppercase font-bold">Contact</a>
            @guest
                <a href="{{ route('login') }}" class="block py-3 px-4 text-lg hover:text-indigo-500 uppercase font-bold">Log In</a>
                <a href="{{ route('register') }}" class="block py-3 px-4 text-lg hover:text-indigo-500 uppercase font-bold">Sign Up</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();" class="block py-3 px-4 text-lg text-red-500 hover:text-red-600 uppercase font-bold">Log out</a>
                </form>
            @endguest
        </div>
    </nav>
    
    @section('scripts')
    
    <script>
        const btn_open = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
    
        btn_open.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
    
    @endsection
</div>