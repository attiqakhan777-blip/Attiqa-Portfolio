@extends('layouts.app')

@section('title', 'Portfolio')

@section('styles')
  <style>
    .portfolio-card {
      transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      overflow: hidden;
    }
    
    .portfolio-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 25px 50px -12px rgba(212, 175, 55, 0.25);
    }

    .portfolio-card img {
      transition: transform 0.8s ease;
    }
    
    .portfolio-card:hover img {
      transform: scale(1.1);
    }
  </style>
@endsection

@section('content')

  <!-- Hero -->
  <section class="pt-28 pb-12 bg-black relative">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h1 id="main-heading" class="text-6xl md:text-7xl heading-font tracking-tighter mb-4">
        My Creative <span class="text-amber-300">Journey</span>
      </h1>
      <p id="sub-text" class="text-lg text-zinc-400 max-w-2xl mx-auto">
        Transforming ideas into elegant, high-performance digital experiences
      </p>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="pt-6 pb-16 bg-black">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="portfolio-grid">

        <!-- Project 1 -->
        <div class="portfolio-card glass rounded-3xl border border-amber-300/20" data-category="ecom">
          <div class="relative">
            <img src="https://picsum.photos/id/1015/800/600" alt="E-commerce" class="w-full h-64 object-cover">
            <div class="absolute top-4 right-4 bg-black/70 text-amber-300 text-xs px-3 py-1 rounded-full">E-Commerce</div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Luxora - Fashion Store</h3>
            <p class="text-zinc-400 text-sm mb-5">Laravel • Livewire • Stripe</p>
            <div class="flex justify-between items-center text-sm">
              <span class="text-zinc-500">2025</span>
              <a href="#" class="text-amber-300 hover:text-white flex items-center gap-2">
                View Project <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="portfolio-card glass rounded-3xl border border-amber-300/20" data-category="app">
          <div class="relative">
            <img src="https://picsum.photos/id/201/800/600" alt="Hospital" class="w-full h-64 object-cover">
            <div class="absolute top-4 right-4 bg-black/70 text-amber-300 text-xs px-3 py-1 rounded-full">Web App</div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">MediCare HMS</h3>
            <p class="text-zinc-400 text-sm mb-5">Hospital Management System</p>
            <div class="flex justify-between items-center text-sm">
              <span class="text-zinc-500">2025</span>
              <a href="#" class="text-amber-300 hover:text-white flex items-center gap-2">
                View Project <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="portfolio-card glass rounded-3xl border border-amber-300/20" data-category="web">
          <div class="relative">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/053/733/179/small/every-detail-of-a-sleek-modern-car-captured-in-close-up-photo.jpg" alt="Portfolio" class="w-full h-64 object-cover">
            <div class="absolute top-4 right-4 bg-black/70 text-amber-300 text-xs px-3 py-1 rounded-full">Website</div>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Car(Sale & Purchase) Website</h3>
            <p class="text-zinc-400 text-sm mb-5">Modern and Easy to use</p>
            <div class="flex justify-between items-center text-sm">
              <span class="text-zinc-500">2025</span>
              <a href="#" class="text-amber-300 hover:text-white flex items-center gap-2">
                View Project <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-12 bg-gradient-to-b from-black to-zinc-900">
    <div class="max-w-3xl mx-auto text-center px-6">
      <h2 id="cta-heading" class="text-5xl heading-font tracking-tighter mb-6">
        Let's build something amazing together
      </h2>
      <button onclick="window.location.href='/contact'" 
        class="px-12 py-6 bg-amber-300 hover:bg-white text-black text-lg font-semibold rounded-full transition-all">
        Start Your Project →
      </button>
    </div>
  </section>

@endsection

@section('scripts')
  <script>
    // Text Animations
    gsap.from("#main-heading", {
      opacity: 0,
      y: 60,
      duration: 1.2,
      ease: "power4.out"
    });

    gsap.from("#sub-text", {
      opacity: 0,
      y: 40,
      duration: 1,
      delay: 0.4,
      ease: "power3.out"
    });

    gsap.from("#cta-heading", {
      opacity: 0,
      y: 50,
      duration: 1.1,
      ease: "power4.out",
      scrollTrigger: {
        trigger: "#cta-heading",
        start: "top 80%"
      }
    });
  </script>
@endsection