<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects',[
            'projects' => $projects
        ]);
    }
    public function show(Project $project)
    {
        $project->loadMissing('projectMembers');
        return view('projectShow',[
            'project'=>$project
        ]);
    }
}
