<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
    <title>@yield('title') | {{ config('app.name') }}</title>
</head>
<body>
    <div>
        <!-- Top Banner -->
        <div class="h-auto bg-cyan-700 p-1">
            <div class="container mx-auto flex justify-evenly flex-wrap">
                <div>
                    <p class="text-white">At QuickFix, we provide expert plumbing, electrical, and general repair services to keep your home in perfect condition.</p>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="bg-white shadow-md">
            <div class="container mx-auto flex justify-between items-center py-4 px-4">
                <!-- Logo -->
                <img src="{{asset('images/QuickFix Logo.png')}}" alt="logo" class="w-40">  <!-- Adjusted width here -->


                <!-- Mobile Menu Button (only for small screens) -->
                <div class="block lg:hidden">
                    <button id="menu-toggle" class="text-gray-800 hover:text-cyan-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                <!-- Desktop Links (centered and evenly spaced on larger screens) -->
                <div class="hidden lg:flex w-full justify-center">
                    <ul class="flex justify-between space-x-8">
                        <li>
                            <a class="font-bold text-sky-900 tracking-tight hover:text-cyan-800" href="{{ route('services.index') }}">HOME</a>
                        </li>
                        <li>
                            <a class="font-bold text-sky-900 tracking-tight hover:text-cyan-800" href="{{ route('list.index') }}">SERVICES</a>
                        </li>
                        <li>
                            <a class="font-bold text-sky-900 tracking-tight hover:text-cyan-800" href="{{ route('contact.index') }}">CONTACT</a>
                        </li>
                        <li>
                            <a class="font-bold text-sky-900 tracking-tight hover:text-cyan-800" href="{{ route('about.index') }}">ABOUT US</a>
                        </li>
                    </ul>
                </div>

                <!-- Search Bar -->
                <div class="hidden lg:flex justify-center items-center bg-gray-100">
                    <div class="relative w-full max-w-md">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="query" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-cyan-800" placeholder="Search...">
                            <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-cyan-800 text-white px-3 py-1 rounded-lg">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu (visible only on small screens) -->
            <div id="mobile-menu" class="lg:hidden hidden bg-white">
                <ul class="flex flex-col items-center py-4">
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{ route('services.index') }}">HOME</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{ route('list.index') }}">SERVICES</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{ route('contact.index') }}">CONTACT</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{ route('about.index') }}">ABOUT US</a></li>
                </ul>
                <div class="w-full max-w-md mx-auto">
                    <form class="" action="{{ route('search') }}" method="GET">
                        <input type="text" name="query" class="w-full px-4 py-2 mb-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-cyan-800" placeholder="Search...">
                        <button type="submit" class="w-full mt-2 right-2 mb-4 top-1/2 transform -translate-y-1/2 bg-cyan-800 text-white px-3 py-1 rounded-lg">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Script for Mobile Menu Toggle -->
        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>

        <!-- Hero Section -->
        <div class="w-full font-mono p-6 bg-cover mt-3 bg-center border-t-4 border-b-4 border-solid border-cyan-800" style="background-image: url('{{ asset('images/wh.jpg') }}');">
            <div class="container mx-auto max-w-6xl">
                <h1 class="text-6xl text-white font-bold mt-4 tracking-wide text-wrap">
                    Fast And Efficient <br> Repair Solutions
                </h1>
                <p class="mt-6 text-2xl text-white font-bold">
                    From fixing leaky faucets to resolving electrical issues,<br>
                    Quick Fix Pro ensures your home is safe, functional, and comfortable.
                </p>
                <button class="bg-zinc-50 h-10 w-40 mt-6 rounded-md font-bold hover:bg-zinc-200">CALL US NOW !!</button>
            </div>
        </div>

        <!-- Features Section -->
        <div class="container mx-auto max-w-6xl bg-white rounded-lg md:-translate-y-20 p-2 flex flex-wrap justify-evenly shadow-lg">
            <div class="w-40 h-32 p-2 text-center flex flex-col items-center">
                <img src="{{ asset('images/24-hours.png') }}" class="w-16 h-16 md:w-24 md:h-20" alt="">
                <p class="font-bold text-cyan-800">24/7 service</p>
            </div>
            <div class="w-40 h-32 p-2 text-center flex flex-col items-center">
                <img src="{{ asset('images/dollar.png') }}" class="w-16 h-16 md:w-24 md:h-20" alt="">
                <p class="font-bold text-cyan-800">Good pricing</p>
            </div>
            <div class="w-40 h-32 p-2 text-center flex flex-col items-center">
                <img src="{{ asset('images/settings.png') }}" class="w-16 h-16 md:w-24 md:h-20" alt="">
                <p class="font-bold text-cyan-800">High-quality</p>
            </div>
            <div class="w-40 h-32 p-2 text-center flex flex-col items-center">
                <img src="{{ asset('images/like.png') }}" class="w-16 h-16 md:w-24 md:h-20" alt="">
                <p class="font-bold text-cyan-800">Inspiring Trust</p>
            </div>
        </div>

        @yield('content')

        <!-- Footer -->
        <div class="w-full bg-sky-900 h-12">
            <footer class="bg-gray-50">
                <div class="container mx-auto max-w-6xl p-4 md:flex md:justify-evenly">
                    <div class="md:w-1/6 mb-3">
                        <img src="{{ asset('images/QuickFix Logo.png') }}" alt="logo" class="mb-4 w-full">
                        <a href="#"><i class="fa-brands fa-facebook text-3xl mr-4 hover:text-cyan-600 text-cyan-800"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter text-3xl mr-4 hover:text-cyan-600 text-cyan-800"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube text-3xl mr-4 hover:text-cyan-600 text-cyan-800"></i></a>
                    </div>

                    <div class="md:w-1/4 mb-3">
                        <h4 class="font-bold text-cyan-800 mb-4">QuickFix Pro</h4>
                        <p class="text-lg">Repairing plumbing, electrical, and general home maintenance issues quickly and efficiently. We provide reliable service 24/7!</p>
                    </div>

                    <div class="md:w-1/4 mb-3">
                        <h4 class="font-bold text-cyan-800 mb-4">Location</h4>
                        <address>
                            QuickFix Pro, Taza, Morocco<br>
                            <span class="font-bold">Email:</span> quickfixpro@gmail.com<br>
                            <span class="font-bold">Phone:</span> +212 666 666 666
                        </address>
                    </div>

                    <div class="md:w-1/4 mb-3">
                        <h4 class="font-bold text-cyan-800 mb-4">Services</h4>
                        <ul class="list-none">
                            <li><a href="{{ route('services.index') }}">Plumbing</a></li>
                            <li><a href="{{ route('services.index') }}">Electrical Work</a></li>
                            <li><a href="{{ route('services.index') }}">General Repairs</a></li>
                            <li><a href="{{ route('services.index') }}">Installation Services</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="bg-gray-900 text-white text-center py-2">
                &copy; 2024 QuickFix Pro. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
