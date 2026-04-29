<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('images')->latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load('images');

        if ($project->id == 1) {
            return view('projects.project1.show', compact('project'));
        } elseif ($project->id == 2) {
            return view('projects.project2.show', compact('project'));
        } else {
            return view('projects.project3.show', compact('project'));
        }
    }
}