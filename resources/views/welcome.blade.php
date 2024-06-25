<x-guest-layout>
  <!-- Main Hero Content -->
<div id="hero" class="container max-w-lg px-4 py-80 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center">
    <h1 class="text-xl text-transparent bg-clip-text bg-gradient-to-r from-zinc-50 to-zinc-400 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block" style="font-size: 120px">Welcome</span>
    </h1>
    <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Transform Your Look, Elevate Your Confidencxe
    </div>
    <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
            <a href="{{ route('reservations.step.one') }}" type="button"
                class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-900 rounded-full lg:w-full md:w-auto hover:bg-zinc-500 focus:outline-none">
                Booking your Appointment
            </a>
        </span>
    </div>
        
</div>

<!-- JavaScript untuk mengubah gambar latar belakang -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const images = [
      "https://images.unsplash.com/photo-1574015974293-817f0ebebb74?q=80&w=1946&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
      "https://images.pexels.com/photos/5733000/pexels-photo-5733000.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
      "https://images.pexels.com/photos/3993447/pexels-photo-3993447.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    ];

    let currentImageIndex = 0;
    const heroElement = document.getElementById("hero");

    function changeBackgroundImage() {
      heroElement.style.backgroundImage = `url('${images[currentImageIndex]}')`;
      currentImageIndex = (currentImageIndex + 1) % images.length;
    }

    setInterval(changeBackgroundImage, 2000); // Ganti gambar setiap 5 detik
    changeBackgroundImage(); // Panggil pertama kali untuk mengatur gambar pertama
  });
</script>
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl" style="text-align: justify;">
                            Welcome to Susi Salons, your ultimate destination for luxury hair and beauty services. 
                            Whether you're preparing for a special occasion or simply seeking a fresh new look,
                            Susi Salons is here to make your beauty dreams come true. 
                            Discover elegance, style, and confidence at Susi Salons today.
                        </p>
                        
                        <div class="relative flex">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-yellow-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://i.pinimg.com/564x/4e/b0/39/4eb039427917b09c48054e893c8e71e2.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    </head>
    <body>
    
        <div class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1574015974293-817f0ebebb74?q=80&w=1946&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            <div class="hero-content">
                <h1 class="text-4xl md:text-5xl lg:text-6xl  text-white mb-4">Unlock your beauty potential at Susi's Salon.</h1>
                <p class="text-lg text-gray-200 mb-6">Transform Your Look, Elevate Your Confidence</p>
            
                <a href="#" class="inline-block bg-green-900 hover:bg-zinc-500 text-white font-bold py-2 px-6 rounded-full mb-4">Explore Our Services</a>
            
            </div>
      
        </div>
    </body>
    <section class="mt-8 bg-white">
    <div class="mt-4 text-center">
        <h3 class="text-2xl ">Our Speciality</h3><br>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            Hair Styling</h2>
    </div>
    <div class="container w-full px-5 py-6 mx-auto">
        @if($specials && $specials->menus->isNotEmpty())
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach ($specials->menus as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                {{ $menu->name }}</h4>
                            <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-green-600">${{ $menu->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600">Get 25% Discount for First Time Customer.</p>
        @endif
    </div>
    </section>

    
    <section class="pt-4 pb-12 bg-gray-800 text-center">
        <div class="my-16">
            <p class="text-lg font-bold text-white">Susi's Salon</p>
            <p class="text-sm text-gray-400">Facials. Hair. Coloring. Makeup.</p>
            <p class="text-sm text-gray-400 mt-4">📍OnePM Building Gading Serpong</p>
        </div>
    </section>
    
    
</x-guest-layout>