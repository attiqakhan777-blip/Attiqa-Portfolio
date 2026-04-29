@extends('layouts.app')

@section('title', $project->title ?? 'Project Detail')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Navigation -->
    <a href="{{ route('projects.index') }}" 
       class="inline-flex items-center gap-3 text-amber-300 hover:text-white mb-10 group transition-all">
        <i class="fa-solid fa-arrow-left transition-transform group-hover:-translate-x-1"></i>
        <span class="font-medium">Back to Portfolio</span>
    </a>

    <!-- Title Section -->
    <div class="mb-8">
        <h1 class="text-5xl md:text-5xl font-bold leading-tight tracking-tighter">
            {{ $project->title }}
        </h1>
    </div>

    <!-- ==================== GALLERY - SMALLER CARDS (3 per row) ==================== -->
    <div class="mt-8">   <!-- Reduced from mt-20 to mt-8 -->
        <h2 class="text-3xl font-semibold mb-8">Project Gallery</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $imageFiles = glob(public_path('storage/projects/*.{jpg,png,JPG,PNG}'), GLOB_BRACE);
            @endphp

            @foreach($imageFiles as $file)
                @php
                    $filename = basename($file);
                @endphp
                <div onclick="showLightbox('{{ asset('storage/projects/' . $filename) }}')" 
                     class="group relative overflow-hidden rounded-3xl cursor-pointer shadow-xl aspect-video bg-zinc-900">
                    
                    <img src="{{ asset('storage/projects/' . $filename) }}" 
                         alt="Project Image"
                         class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">

                    <!-- Hover Effect -->
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-all flex items-center justify-center">
                        <div class="w-12 h-12 rounded-2xl border border-white/50 flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if(empty($imageFiles))
            <div class="text-center py-24 text-gray-500">
                <i class="fa-solid fa-images text-7xl mb-6 opacity-30"></i>
                <p class="text-xl">No images found in storage/projects folder</p>
            </div>
        @endif
    </div>

</div>

<!-- Lightbox -->
<div id="lightbox" class="hidden fixed inset-0 bg-black/95 z-[100] flex items-center justify-center p-6">
    <button onclick="hideLightbox()" class="absolute top-8 right-8 text-5xl text-white hover:text-amber-300">×</button>
    <img id="lightbox-image" src="" class="max-h-[90vh] max-w-full rounded-3xl shadow-2xl" alt="">
</div>
@endsection

@section('scripts')
<script>
function showLightbox(src) {
    document.getElementById('lightbox-image').src = src;
    document.getElementById('lightbox').classList.remove('hidden');
    document.getElementById('lightbox').classList.add('flex');
}

function hideLightbox() {
    document.getElementById('lightbox').classList.add('hidden');
    document.getElementById('lightbox').classList.remove('flex');
}

document.addEventListener('keydown', (e) => {
    if (e.key === "Escape") hideLightbox();
});
</script>
@endsection