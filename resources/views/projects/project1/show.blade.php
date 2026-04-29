@extends('layouts.app')

@section('title', 'Project 1 - ' . ($project->title ?? 'Project One'))

@section('content')
    <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-amber-300 hover:text-white mb-8">
        ← Back to All Projects
    </a>

    <h1 class="text-5xl font-bold mb-4">{{ $project->title ?? 'Project One' }}</h1>
    <p class="text-gray-400 text-xl mb-12">{{ $project->description ?? '' }}</p>

    <!-- Multiple Images Gallery -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($project->images as $image)
            <div class="group relative overflow-hidden rounded-3xl shadow-2xl">
                <img src="{{ asset('storage/' . $image->image_path) }}" 
                     alt="{{ $project->title }}"
                     class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                
                @if($image->caption)
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                        <p class="text-sm text-gray-200">{{ $image->caption }}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    @if($project->images->isEmpty())
        <div class="text-center py-20 text-gray-500">
            <i class="fa-solid fa-images text-6xl mb-4"></i>
            <p>No images available for this project yet.</p>
        </div>
    @endif
@endsection