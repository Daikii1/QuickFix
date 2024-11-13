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
<body>
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
                <img src="{{asset('images/QuickFix Logo.png')}}" alt="logo" class="w-40">  <!-- Adjusted width here -->



                {{-- Mobile Menu Button --}}
                <div class="block lg:hidden">
                    <button id="menu-toggle" class="text-gray-800 hover:text-cyan-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                {{-- Links --}}
                <div class="hidden lg:flex w-1/4">
                    <ul class="flex justify-between">
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4"><a class="font-bold text-sky-900 tracking-tight" href="{{route('services.index')}}">HOME</a></li>
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4 "><a class="font-bold text-sky-900 tracking-tight" href="{{route('list.index')}}">SERVICES</a></li>
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4"><a class="font-bold text-sky-900 tracking-tight" href="{{route('contact.index')}}">CONTACT</a></li>
                        <li class="hover:-translate-y-2 transition-transform duration-300 ml-4"><a class="font-bold text-sky-900 tracking-tight" href="{{route('about.index')}}">ABOUT US</a></li>
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
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{route('services.index')}}">HOME</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{route('list.index')}}">SERVICES</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{route('contact.index')}}">CONTACT</a></li>
                    <li class="mb-2"><a class="font-bold text-sky-900 tracking-tight" href="{{route('about.index')}}">ABOUT US</a></li>
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
    <div class="flex flex-col items-center justify-center mt-4">
        <h1 class="font-bold mb-4 text-3xl text-cyan-900">Send Us A Message!</h1>
        <p class="font-semibold text-center mb-6">
            Have a question or need assistance? We're here to help! Simply <br> fill out the form below and send us a message.
        </p>
        <form action="{{ route('messages.send') }}" method="POST" class="flex flex-col items-center w-full max-w-lg">
            @csrf <!-- Laravel CSRF protection -->
            <input type="text" name="name" class="bg-white rounded-lg border-2 border-cyan-800 mb-4 p-2 w-full outline-none" placeholder="Your Name" required>
            <textarea name="message" class="bg-white rounded-lg border-2 border-cyan-800 p-2 w-full outline-none" placeholder="Your Message" cols="30" rows="5" required></textarea>
            <input type="submit" value="Send" class="w-full h-12 cursor-pointer bg-cyan-800 rounded-lg mt-2 text-white font-bold">
        </form>
    </div>
    </div>

    <footer class="w-full bg-gray-50 mt-4">
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