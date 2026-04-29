@extends('layouts.app')

@section('title', 'About')

@section('styles')
  <style>
    .glass {
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(24px);
      border: 1px solid rgba(212,175,55,0.3);
      transition: all 0.4s ease;
    }
    
    .glass:hover {
      background: rgba(255,255,255,0.18);
      border-color: var(--gold);
      transform: translateY(-8px);
    }
  </style>
@endsection

@section('content')

  <!-- About Section -->
  <section class="pt-32 pb-24 bg-black">
    <div class="max-w-7xl mx-auto px-6">
      <div class="max-w-4xl mx-auto text-center mb-20">
        <h1 class="text-6xl md:text-7xl heading-font leading-none tracking-tighter mb-6 about-title">
          About Me
        </h1>
        <p class="text-amber-300 text-xl subtitle">Passionate • Detail-oriented • Visionary</p>
      </div>

      <div class="max-w-3xl mx-auto text-lg leading-relaxed space-y-10">
        <p class="text-2xl text-zinc-200 para1">
          I’m Attiqa Khan, a dedicated Web Developer with a passion for creating elegant and high-performance digital experiences.
        </p>
        
        <p class="text-zinc-300 para2">
          With a strong foundation in Laravel and modern frontend technologies, I specialize in building responsive, user-centric websites and web applications that combine beautiful design with robust functionality.
        </p>
        
        <p class="text-zinc-300 para3">
          My approach is rooted in attention to detail, clean code, and delivering exceptional user experiences. Whether it's a complex web application or a sleek business website, I strive to exceed expectations and bring visions to life.
        </p>
      </div>
    </div>
  </section>

@endsection

@section('scripts')
  <script>
    // Register ScrollTrigger if not already in layout
    if (typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);
    }

    gsap.from(".about-title", { 
      opacity: 0, 
      y: 80, 
      duration: 1.2, 
      ease: "power4.out" 
    });

    gsap.from(".subtitle", { 
      opacity: 0, 
      y: 50, 
      duration: 1, 
      delay: 0.4 
    });

    gsap.from(".para1", { 
      opacity: 0, 
      y: 60, 
      duration: 1, 
      delay: 0.6 
    });

    gsap.from(".para2", { 
      opacity: 0, 
      y: 60, 
      duration: 1, 
      delay: 0.9 
    });

    gsap.from(".para3", { 
      opacity: 0, 
      y: 60, 
      duration: 1, 
      delay: 1.2 
    });
  </script>
@endsection