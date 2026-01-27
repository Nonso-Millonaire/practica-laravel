<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')
            ->with('success', __('Project created successfully.'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')
            ->with('success', __('Project updated successfully.'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')
            ->with('success', __('Project deleted successfully.'));
    }
}
