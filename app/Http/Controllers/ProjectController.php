<?php

namespace App\Http\Controllers;

use App\Support\Projects;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects.index', [
            'projects' => Projects::all(),
        ]);
    }

    public function show(string $slug)
    {
        $project = Projects::find($slug);

        if ($project === null) {
            abort(404);
        }

        $allProjects = Projects::all();
        $currentIndex = array_search($slug, array_column($allProjects, 'slug'), true);
        $previousProject = $currentIndex > 0 ? $allProjects[$currentIndex - 1] : null;
        $nextProject = $currentIndex < count($allProjects) - 1 ? $allProjects[$currentIndex + 1] : null;

        return view('pages.projects.show', [
            'project' => $project,
            'previousProject' => $previousProject,
            'nextProject' => $nextProject,
            'seo' => \App\Support\Seo::forProject($project),
        ]);
    }
}
