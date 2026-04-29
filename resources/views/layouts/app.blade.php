<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title') | Attiqa Khan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap');
    
    :root { 
      --gold: #d4af37; 
    }
    
    body { 
      font-family: 'Inter', sans-serif; 
    }
    
    .heading-font { 
      font-family: 'Playfair Display', serif; 
    }
    
    .glass {
      background: rgba(255,255,255,0.06);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(212,175,55,0.25);
    }
    
    .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background: linear-gradient(to right, #d4af37, #f5e8b3);
      transition: width 0.4s ease;
    }
    
    .nav-link:hover::after, 
    .nav-link:hover { 
      width: 100%; 
      color: var(--gold); 
    }
  </style>
  @yield('styles')
</head>
<body class="bg-zinc-950 text-white overflow-x-hidden">

  <!-- ==================== HEADER / NAVBAR ==================== -->
  <nav class="fixed top-0 w-full z-50 glass py-6">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
      <div class="text-2xl font-bold tracking-widest text-amber-300">Attiqa Khan.</div>
      <div class="hidden md:flex gap-10 text-sm uppercase tracking-widest font-medium">
        <a href="/" class="nav-link {{ request()->is('/') ? 'text-amber-300' : '' }}">Home</a>
        <a href="/about" class="nav-link {{ request()->is('about') ? 'text-amber-300' : '' }}">About</a>
        <a href="/skills" class="nav-link {{ request()->is('skills') ? 'text-amber-300' : '' }}">Skills</a>
        <a href="/portfolio" class="nav-link {{ request()->is('portfolio') ? 'text-amber-300' : '' }}">Portfolio</a>
        <a href="/contact" class="nav-link {{ request()->is('contact') ? 'text-amber-300' : '' }}">Contact</a>
      </div>
      <button onclick="window.location.href='/contact'" 
        class="px-6 py-3 text-sm border border-amber-300 hover:bg-amber-300 hover:text-black rounded-full transition-all">
        Hire Me
      </button>
    </div>
  </nav>

  <!-- ==================== PAGE CONTENT ==================== -->
  @yield('content')

  <!-- ==================== FOOTER ==================== -->
  <footer class="bg-black border-t border-amber-300/10 pt-20 pb-12">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-12 gap-12">
        <div class="md:col-span-5">
          <div class="text-4xl font-bold tracking-widest text-amber-300 mb-6">Attiqa Khan</div>
          <p class="text-zinc-400 max-w-md text-lg leading-relaxed">
            Crafting elegant digital experiences with passion and precision.
          </p>
          
          <div class="mt-10 flex gap-6 text-3xl">
            <a href="#" class="hover:text-amber-300 transition"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" class="hover:text-amber-300 transition"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="hover:text-amber-300 transition"><i class="fa-brands fa-behance"></i></a>
          </div>
        </div>

        <div class="md:col-span-2">
          <h4 class="uppercase text-sm tracking-widest text-zinc-500 mb-6">Navigation</h4>
          <div class="space-y-4 text-zinc-300">
            <a href="/" class="hover:text-amber-300 block">Home</a>
            <a href="/about" class="hover:text-amber-300 block">About</a>
            <a href="/skills" class="hover:text-amber-300 block">Skills</a>
            <a href="/portfolio" class="hover:text-amber-300 block">Portfolio</a>
            <a href="/contact" class="hover:text-amber-300 block">Contact</a>
          </div>
        </div>

        <div class="md:col-span-2">
          <h4 class="uppercase text-sm tracking-widest text-zinc-500 mb-6">Services</h4>
          <div class="space-y-4 text-zinc-300">
            <p class="block">Website Development</p>
            <p class="block">Web Applications</p>
            <p class="block">E-commerce Solutions</p>
            <p class="block">UI/UX Design</p>
            <p class="block">Landing Pages</p>
          </div>
        </div>

        <div class="md:col-span-3">
          <h4 class="uppercase text-sm tracking-widest text-zinc-500 mb-6">Get In Touch</h4>
          <div class="space-y-5 text-zinc-300">
            <a href="mailto:attiqa.khan777@gmail.com" class="hover:text-amber-300 block">attiqa.khan777@gmail.com</a>
            <a href="tel:+923020069998" class="hover:text-amber-300 block">+92 302 0069998</a>
            <p class="text-zinc-400">Rahim Yar Khan, Pakistan</p>
          </div>
        </div>
      </div>

      <div class="mt-20 pt-8 border-t border-zinc-800 flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-zinc-500">
        <div>© 2026 Attiqa Khan • All Rights Reserved</div>
        <div class="flex gap-8">
          <a href="#" class="hover:text-amber-300">Privacy Policy</a>
          <a href="#" class="hover:text-amber-300">Terms & Conditions</a>
        </div>
        <div class="text-amber-300/70">
          Made with <span class="text-red-500">❤</span> in Pakistan
        </div>
      </div>
    </div>
  </footer>

  <script>
    gsap.from("nav", { y: -100, duration: 1, ease: "power3.out" });
  </script>

  @yield('scripts')
</body>
</html>