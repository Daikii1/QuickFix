@extends('base')
@section('content')
  
   <div class=" container mx-auto mt-5 max-w-6xl text-center w-full">
    <h1 class="text-4xl text-sky-800">What we offer</h1>
    <p class="font-medium">
        At QuickFix Pro, we offer professional home repair services, including plumbing,<br>
         electrical work, and general maintenance. Our skilled technicians ensure reliable,
         <br> high-quality solutions for all your repair needs
    </p>

    
        
    <div class="container mx-auto md:flex md:flex-wrap justify-evenly w-full p-8 mt-2">
        @forelse ($services as $index => $service)
            <div class="flex flex-col items-center p-4 md:w-1/4 w-full bg-slate-50 rounded-lg m-2 text-wrap service-card" 
                 data-index="{{ $index }}" style="{{ $index >= 3 ? 'display: none;' : '' }}">
                <img class="rounded-lg" src="{{ Storage::url($service->image) }}" alt="">
                <h2 class="text-2xl mt-2 font-bold text-center break-words">{{ $service->name }}</h2>
                <p class="font-semibold text-center break-words">{{ $service->description }}</p>
            </div>
        @empty
            <h1 class="text-center w-full">No services to show</h1>
        @endforelse
    </div>
    
    

    
    <button class="h-12 w-72 mt-2 rounded-lg font-semibold bg-slate-100 p-4 hover:bg-slate-200 show-more-btn">
        Show More!
    </button>
    
    
    
    

    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const serviceCards = document.querySelectorAll(".service-card");
            const showMoreBtn = document.querySelector(".show-more-btn");
            let currentIndex = 3; // Start by showing the first 3 services
    
            showMoreBtn.addEventListener("click", () => {
                const nextIndex = currentIndex + 3;
                for (let i = currentIndex; i < nextIndex && i < serviceCards.length; i++) {
                    serviceCards[i].style.display = "flex";
                    serviceCards[i].style.opacity = 0;
                    setTimeout(() => {
                        serviceCards[i].style.opacity = 1;
                        serviceCards[i].style.transition = "opacity 0.5s";
                    }, 100);
                }
                currentIndex += 3;
                
                // Hide the "Show More" button if all services are displayed
                if (currentIndex >= serviceCards.length) {
                    showMoreBtn.style.display = "none";
                }
            });
        });
    </script>
    


   <div class=" mx-auto  max-w-6xl flex justify-between flex-wrap mt-4 p-3 text-center  ">
    <div class="">
        <img class="rounded-lg w-80 h-96 mx-auto" src="{{asset('images/workkk.png')}}" alt="">
        <h1 class="font-bold">Our Friendly</h1>
        <p class="font-semibold">
            Team is here to help with any questions or concerns you might have,<br>
             ensuring quick and efficient support.
        </p>
    </div>

    <div class="flex flex-col items-center justify-center">
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
@endsection




















