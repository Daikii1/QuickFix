<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="min-h-screen flex flex-col">
    <div>
        <div class="h-auto bg-cyan-700	p-1">
            <div class="container mx-auto flex justify-evenly flex-wrap	">
                <div>
                    <p class="text-white">At QuickFix, we provide expert plumbing, electrical, and general repair services to keep your home in perfect condition.</p>
                </div>

            </div>
        </div>

        {{-- navbar --}}
        <nav class="bg-white shadow-md">
            <div class="container mx-auto flex justify-between items-center py-4 px-4">
                {{-- Logo --}}
                <img src="{{asset('images/QuickFix Logo.png')}}" alt="logo" class="md:w-1/6 w-1/3">


                {{-- Mobile Menu Button --}}
                <div class="block lg:hidden">
                    <button id="menu-toggle" class="text-gray-800 hover:text-cyan-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                {{-- Links --}}
                <div class="hidden lg:flex w-1/4">
                    <ul class="flex justify-between">
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4"><a class="font-bold text-sky-900 tracking-tight" href="#">HOME</a></li>
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4 "><a class="font-bold text-sky-900 tracking-tight" href="#">SERVICES</a></li>
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4"><a class="font-bold text-sky-900 tracking-tight" href="#">CONTACT</a></li>
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4"><a class="font-bold text-sky-900 tracking-tight" href="#">ABOUT US</a></li>
                    </ul>
                </div>

                {{-- Search Bar --}}
                <div class="hidden lg:flex justify-center items-center bg-gray-100">
                    <div class="relative w-full max-w-md">
                        <form action="{{ route('search') }}" method="GET">
                            <input 
                                type="text" name="query"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-cyan-800"
                                placeholder="Search...">
                            <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-cyan-800 text-white px-3 py-1 rounded-lg">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="lg:hidden hidden bg-white">
                <ul class="flex flex-col items-center py-4">
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="#">HOME</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="#">SERVICES</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="#">CONTACT</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="#">ABOUT US</a></li>
                </ul>
                <div class="w-full max-w-md mx-auto">
                    <form class="" action="{{ route('search') }}" method="GET">
                        <input 
                            type="text" name="query"
                            class="w-full px-4 py-2 mb-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-cyan-800"
                            placeholder="Search...">
                        <button type="submit" class="w-full mt-2 right-2 mb-4 top-1/2 transform -translate-y-1/2 bg-cyan-800 text-white px-3 py-1 rounded-lg">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        {{-- Script for Mobile Menu Toggle --}}
        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>
        {{-- End of Navbar --}}
        {{-- end-navbar --}}



        <section class="bg-gray-100 py-8">
            <div class="container mx-auto max-w-6xl text-center px-4">
                <h2 class="text-3xl font-bold text-cyan-800">Our Expert Services</h2>
                <p class="text-gray-600 mt-4">
                    At QuickFix, we are committed to providing top-notch services in plumbing, electrical maintenance, and general home repairs. Our team of professionals ensures quality and reliability for all your maintenance needs.
                </p>
            </div>
        </section>
        
        <div class="container h-full max-w-6xl mx-auto p-6">
            @forelse($services as $service)
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col sm:flex-row mb-6">
                    <img src="{{ Storage::url($service->image) }}" alt="Service Image" class="w-full sm:w-1/3 h-44 object-cover rounded-lg">
                    <div class="flex-1 sm:pl-6">
                        <h3 class="text-2xl font-bold text-cyan-800 mt-4 sm:mt-0">{{ $service->name }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $service->description }}</p>
                    </div>
                </div>
            @empty
                <p class="text-gray-600 text-center">No services found.</p>
            @endforelse
        </div>
        
    <footer class="w-full bg-gray-50">
        <div class="container mx-auto max-w-6xl p-4 flex justify-evenly w-full">
            <div class="w-1/6">
                <img src="{{asset('images/QuickFix Logo.png')}}" alt="logo" class="mb-4">
                <a href="#"><i class="fa-brands fa-facebook text-3xl mr-4 hover:text-cyan-600 text-cyan-800"></i></a>
                <a href="#"><i class="fa-brands fa-instagram text-3xl mr-4 hover:text-cyan-600 text-cyan-800"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter text-3xl mr-4 hover:text-cyan-600 text-cyan-800"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in text-3xl hover:text-cyan-600 text-cyan-800"></i></a>                
            </div>

            <div class="flex flex-col font-bold text-cyan-700">
                <a class="hover:text-cyan-500" href="">HOME</a>
                <a class="hover:text-cyan-500" href="">ABOUT US</a>
                <a class="hover:text-cyan-500" href="">SERVICES</a>
                <a class="hover:text-cyan-500" href="">CONTACT</a>
            </div>

            <div>
                <h3 class="font-semibold text-cyan-700">Work Hours</h3>
                <div><i class="fa-solid fa-clock mr-2"></i>Mon - Sat: 09 AM - 10 PM</div>
                <div><i class="fa-solid fa-clock mr-2"></i>Sun: 10 AM - 07 PM</div>
                <div class="rounded-lg bg-cyan-800 h-16 text-center font-semibold p-3 mt-2 text-white">
                    <i class="fa-solid fa-square-phone mr-2"></i>Call Us Now!! <br> +212 123 456 78
                </div>
            </div>
        </div>
    </footer>

    <div class="w-full bg-sky-900 h-12">
        <p class="text-center font-semibold p-2 text-white">&copy; 2024 QuickFix. All rights reserved.</p>
    </div>
</body>
</html>
