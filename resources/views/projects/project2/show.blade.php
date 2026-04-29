@extends('layouts.app')

@section('title', 'Project 2 - ' . ($project->title ?? 'Project Two'))

@section('content')
    <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-amber-300 hover:text-white mb-8">
        ← Back to All Projects
    </a>

    <h1 class="text-5xl font-bold mb-4">{{ $project->title ?? 'Project Two' }}</h1>
    <p class="text-gray-400 text-xl mb-12">{{ $project->description ?? '' }}</p>

    <!-- Same gallery as above -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($project->images as $image)
            <div class="group relative overflow-hidden rounded-3xl shadow-2xl">
                <img src="{{ asset('storage/' . $image->image_path) }}" 
                     alt="{{ $project->title }}"
                     class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
            </div>
        @endforeach
    </div>
@endsection