@extends('layouts.app')

@section('title', 'Skills')

@section('styles')
  <style>
    .glass {
      background: rgba(255,255,255,0.06);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(212,175,55,0.25);
    }
    
    .skill-card {
      transition: all 0.5s cubic-bezier(0.4, 0.0, 0.2, 1);
    }
    
    .skill-card:hover {
      transform: translateY(-10px);
      border-color: var(--gold);
      box-shadow: 0 25px 50px -12px rgba(212, 175, 55, 0.3);
    }

    .skill-bar {
      height: 6px;
      background: rgba(212, 175, 55, 0.2);
      border-radius: 9999px;
      overflow: hidden;
    }
    
    .skill-progress {
      height: 100%;
      background: linear-gradient(to right, #d4af37, #f5e8b3);
    }
  </style>
@endsection

@section('content')

  <!-- SKILLS SECTION -->
  <section id="skills" class="pt-32 pb-24 bg-zinc-950">
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

@endsection

@section('scripts')
  <script>
    gsap.registerPlugin(ScrollTrigger);

    // ==================== WHOLE PAGE ANIMATIONS ====================

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

    // Frontend & Backend Sections
    gsap.from(".skill-section", {
      opacity: 0,
      y: 80,
      duration: 1,
      stagger: 0.3,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".skill-section",
        start: "top 80%"
      }
    });

    // Skill Cards
    gsap.from(".skill-card", {
      opacity: 0,
      y: 70,
      duration: 0.9,
      stagger: 0.08,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".skill-card",
        start: "top 85%"
      }
    });

    // Skill Progress Bars
    gsap.from(".skill-progress", {
      width: "0%",
      duration: 2.2,
      stagger: 0.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: "#skills",
        start: "top 70%"
      }
    });
  </script>
@endsection