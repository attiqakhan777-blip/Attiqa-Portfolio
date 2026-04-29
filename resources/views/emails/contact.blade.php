@extends('layouts.app')

@section('title', 'Contact Us')

@section('styles')
  <style>
    .glass {
      background: rgba(255,255,255,0.05);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(212,175,55,0.2);
    }

    .input-field {
      transition: all 0.3s ease;
    }
    .input-field:focus {
      border-color: #d4af37;
      box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.15);
    }

    .contact-card {
      transition: all 0.4s ease;
    }
  </style>
@endsection

@section('content')

  <!-- Contact Section -->
  <section id="contact" class="min-h-screen pt-28 pb-20 flex items-center">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from("#main-heading", { opacity: 0, y: 80, duration: 1.3, ease: "power4.out" });
    gsap.from("#sub-text", { opacity: 0, y: 50, duration: 1.1, delay: 0.3, ease: "power3.out" });

    

    gsap.from("#form-container", {
      opacity: 0, x: 80, duration: 1.2,
      scrollTrigger: { trigger: "#form-container", start: "top 80%" }
    });

    // Form Loading State
    document.getElementById('contactForm').addEventListener('submit', function() {
      const btn = document.getElementById('submitBtn');
      btn.innerHTML = `<i class="fa-solid fa-spinner fa-spin"></i> SENDING...`;
      btn.disabled = true;
    });
  </script>
@endsection