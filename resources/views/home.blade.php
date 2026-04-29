@extends('layouts.app')

@section('title', 'Home')

@section('styles')
  <style>
    .glass {
      transition: all 0.4s ease;
    }
    .glass:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px -15px rgba(212, 175, 55, 0.15);
    }

    .portfolio-card {
      transition: all 0.4s ease;
    }
    .portfolio-card:hover {
      transform: translateY(-12px) scale(1.03);
      border-color: rgba(212, 175, 55, 0.4);
    }

    .skill-card {
      transition: all 0.4s ease;
    }
    .skill-card:hover {
      transform: translateY(-10px) scale(1.05);
      border-color: rgba(212, 175, 55, 0.3);
    }

    .contact-card {
      transition: all 0.4s ease;
    }
    .contact-card:hover {
      transform: translateX(10px);
    }

    .skill-section {
      transition: all 0.4s ease;
    }
    .skill-section:hover {
      transform: translateY(-8px);
    }
    .animate-marquee {
  animation: marquee 15s linear infinite;
}
@keyframes marquee {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}
  </style>
@endsection

@section('content')

  <!-- Hero Section -->
<section class="min-h-screen flex items-center relative pt-20 bg-black">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-12 lg:gap-12 items-center">

      <!-- Left Content -->
      <div class="space-y-8">
        <h2 class="text-3xl md:text-8xl heading-font leading-tight tracking-tighter">
          Attiqa Khan<br>
          <span class="text-amber-300">Web Developer</span>
        </h2>

        <p class="text-lg md:text-xl text-zinc-400 max-w-md">
          Designing and developing elegant, high-performance websites and web applications.
        </p>

        <div class="flex flex-wrap gap-4">
          <button onclick="document.getElementById('portfolio').scrollIntoView({behavior:'smooth'})"
            class="px-8 py-4 bg-amber-300 text-black font-semibold rounded-2xl hover:bg-amber-200 transition-all flex items-center gap-3">
            View Portfolio
            <i class="fa-solid fa-arrow-right"></i>
          </button>

          <button onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})"
            class="px-8 py-4 border border-amber-300 hover:bg-white/10 rounded-2xl transition-all">
            Let's Talk
          </button>
        </div>
      </div>

      <!-- Right Image -->
<!-- Right Image -->
<!-- Right Side - Image (Slightly adjusted) -->
      <div class="relative flex justify-center md:justify-end">
        <div class="relative">
          <img 
            src="https://img.freepik.com/premium-photo/female-developer-background_665280-9662.jpg" 
            alt="Attiqa Khan" 
            class="rounded-3xl shadow-2xl border border-amber-300/30 w-full max-w-[340px] md:max-w-[400px] object-cover" 
          />
  
  <div class="absolute -bottom-6 -right-6 glass px-7 py-5 rounded-3xl text-center shadow-2xl">
    <div class="text-amber-300 text-sm tracking-widest">OPEN TO</div>
    <div class="text-lg font-medium">Freelance Projects</div>
  </div>
</div>
    </div>
  </div>
</section>
<!-- Moving Looping Line -->
<div class="overflow-hidden whitespace-nowrap py-3">
  <div class="inline-flex items-center gap-8 text-amber-300 text-2xl md:text-3xl font-medium animate-marquee">
    <!-- First Copy -->
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    
    <!-- Second Copy (for seamless loop) -->
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    <span>WEB DEVELOPER</span>
    <span>✦</span>
    <span>WEB DEVELOPER</span>
    <span>✦</span>
  </div>
</div>


  <!-- SKILLS SECTION -->
  <section id="skills" class="pt-20 pb-16 bg-zinc-950">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 id="main-heading" class="text-6xl md:text-7xl heading-font tracking-tighter mb-4">My Expertise</h2>
        <p id="sub-text" class="text-zinc-400 text-xl">Technologies & Creative Tools I Master</p>
      </div>

      <div class="grid lg:grid-cols-12 gap-12">

        <!-- Left Column -->
        <div class="lg:col-span-5 space-y-10">

          <!-- Frontend -->
          <div class="glass p-8 rounded-3xl skill-section">
            <div class="flex items-center gap-4 mb-8">
              <i class="fa-solid fa-code text-4xl text-amber-300"></i>
              <div>
                <h3 class="text-3xl font-semibold">Frontend</h3>
                <p class="text-amber-300">Pixel-perfect & Interactive</p>
              </div>
            </div>
            <div class="space-y-8">
              <div>
                <div class="flex justify-between text-sm mb-2"><span>HTML5 / Tailwind CSS</span><span class="text-amber-300">95%</span></div>
                <div class="skill-bar"><div class="skill-progress w-[95%]"></div></div>
              </div>
              <div>
                <div class="flex justify-between text-sm mb-2"><span>JavaScript / jQuery</span><span class="text-amber-300">90%</span></div>
                <div class="skill-bar"><div class="skill-progress w-[90%]"></div></div>
              </div>
              <div>
                <div class="flex justify-between text-sm mb-2"><span>GSAP / Animations</span><span class="text-amber-300">85%</span></div>
                <div class="skill-bar"><div class="skill-progress w-[85%]"></div></div>
              </div>
            </div>
          </div>

          <!-- Backend -->
          <div class="glass p-8 rounded-3xl skill-section">
            <div class="flex items-center gap-4 mb-8">
              <i class="fa-solid fa-server text-4xl text-amber-300"></i>
              <div>
                <h3 class="text-3xl font-semibold">Backend</h3>
                <p class="text-amber-300">Robust & Scalable</p>
              </div>
            </div>
            <div class="space-y-8">
              <div>
                <div class="flex justify-between text-sm mb-2"><span>Laravel (PHP)</span><span class="text-amber-300">92%</span></div>
                <div class="skill-bar"><div class="skill-progress w-[92%]"></div></div>
              </div>
              <div>
                <div class="flex justify-between text-sm mb-2"><span>MySQL</span><span class="text-amber-300">88%</span></div>
                <div class="skill-bar"><div class="skill-progress w-[88%]"></div></div>
              </div>
              <div>
                <div class="flex justify-between text-sm mb-2"><span>RESTful APIs</span><span class="text-amber-300">90%</span></div>
                <div class="skill-bar"><div class="skill-progress w-[90%]"></div></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="lg:col-span-7">
          <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-brands fa-html5 text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">HTML5</h4>
              <p class="text-zinc-400 text-sm">Semantic & Accessible</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-brands fa-css3-alt text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">Tailwind CSS</h4>
              <p class="text-zinc-400 text-sm">Modern Styling</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-brands fa-js text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">JavaScript</h4>
              <p class="text-zinc-400 text-sm">ES6+</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-brands fa-laravel text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">Laravel</h4>
              <p class="text-zinc-400 text-sm">Full-stack PHP</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-solid fa-database text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">MySQL</h4>
              <p class="text-zinc-400 text-sm">Database Mastery</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-brands fa-git-alt text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">Git & GitHub</h4>
              <p class="text-zinc-400 text-sm">Version Control</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-solid fa-pen-nib text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">Canva</h4>
              <p class="text-amber-300 text-sm">Graphic Designing</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-brands fa-figma text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">Figma</h4>
              <p class="text-amber-300 text-sm">UI/UX Design</p>
            </div>

            <div class="skill-card glass p-8 rounded-3xl text-center">
              <i class="fa-solid fa-video text-6xl mb-6 text-amber-300"></i>
              <h4 class="font-semibold text-xl mb-1">CapCut</h4>
              <p class="text-amber-300 text-sm">Video Editing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-16 pb-8 bg-black relative">
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
  <section id="portfolio" class="pt-6 pb-12 bg-black">
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
      <a href="{{ route('projects.show', 3) }}" 
   class="text-amber-300 hover:text-white flex items-center gap-2">
    View Project <i class="fa-solid fa-arrow-right"></i>
</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="pt-20 pb-16 bg-black">
    <div class="max-w-7xl mx-auto px-6">
      <div class="max-w-4xl mx-auto text-center mb-16">
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
  <!-- Contact Section -->
  <section id="contact" class="pt-20 pb-20 flex items-center">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid md:grid-cols-12 gap-16 items-center">

        <!-- Left Side - Contact Info -->
        <div class="md:col-span-5">
          <h1 id="main-heading" class="text-6xl heading-font tracking-tighter mb-6">
            Get In Touch
          </h1>
          <p id="sub-text" class="text-zinc-400 text-lg mb-12">
            Ready to bring your vision to life? Let's talk.
          </p>

          <div class="space-y-10">
            <div class="contact-card flex gap-5">
              <div class="w-12 h-12 rounded-2xl bg-amber-300/10 flex items-center justify-center text-2xl text-amber-300">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div>
                <p class="text-amber-300 text-sm tracking-widest">EMAIL</p>
                <a href="mailto:attiqa.khan777@gmail.com" class="text-l hover:text-amber-300 transition">attiqa.khan777@gmail.com</a>
              </div>
            </div>

            <div class="contact-card flex gap-5">
              <div class="w-12 h-12 rounded-2xl bg-amber-300/10 flex items-center justify-center text-2xl text-amber-300">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div>
                <p class="text-amber-300 text-sm tracking-widest">PHONE / WHATSAPP</p>
                <a href="tel:+923020069998" class="text-l hover:text-amber-300 transition">+92 302 0069998</a>
              </div>
            </div>

            <div class="contact-card flex gap-5">
              <div class="w-12 h-12 rounded-2xl bg-amber-300/10 flex items-center justify-center text-2xl text-amber-300">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div>
                <p class="text-amber-300 text-sm tracking-widest">LOCATION</p>
                <p class="text-l">Rahim Yar Khan, Pakistan</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side - Form -->
        <div class="md:col-span-7">
          <div id="form-container" class="glass max-w-lg mx-auto p-8 md:p-10 rounded-3xl">
            <form action="{{ route('contact.send') }}" method="POST" id="contactForm" class="space-y-6">
              @csrf
              <div class="grid grid-cols-2 gap-5">
                <div>
                  <label class="block text-xs tracking-widest text-zinc-400 mb-2">FULL NAME</label>
                  <input type="text" name="name" required class="input-field w-full bg-zinc-900 border border-zinc-700 rounded-2xl px-5 py-4 text-base">
                </div>
                <div>
                  <label class="block text-xs tracking-widest text-zinc-400 mb-2">EMAIL</label>
                  <input type="email" name="email" required class="input-field w-full bg-zinc-900 border border-zinc-700 rounded-2xl px-5 py-4 text-base">
                </div>
              </div>

              <div>
                <label class="block text-xs tracking-widest text-zinc-400 mb-2">PROJECT TYPE</label>
                <select name="project_type" required class="input-field w-full bg-zinc-900 border border-zinc-700 rounded-2xl px-5 py-4 text-base">
                  <option value="">Select...</option>
                  <option>Website Design & Development</option>
                  <option>Web Application</option>
                  <option>E-commerce</option>
                  <option>Portfolio Site</option>
                  <option>Other</option>
                </select>
              </div>

              <div>
                <label class="block text-xs tracking-widest text-zinc-400 mb-2">MESSAGE</label>
                <textarea name="message" rows="5" required 
                          class="input-field w-full bg-zinc-900 border border-zinc-700 rounded-3xl px-5 py-4 text-base resize-none"
                          placeholder="Tell me about your project..."></textarea>
              </div>

              <button type="submit" id="submitBtn"
                class="w-full bg-amber-300 hover:bg-white text-black font-semibold py-4 rounded-2xl text-base transition-all flex items-center justify-center gap-3">
                SEND MESSAGE
                <i class="fa-solid fa-paper-plane"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('scripts')
  <script>
    gsap.from(".heading-font", { 
      opacity: 0, 
      y: 100, 
      duration: 1.4, 
      stagger: 0.3, 
      ease: "power4.out" 
    });
  </script>
@endsection