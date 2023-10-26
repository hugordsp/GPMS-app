<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Resources\V1\ProjectCollection;
use App\Http\Resources\V1\ProjectResource;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return new ProjectCollection(Project::paginate(5)); 
    }

    public function show(Project $project) 
    {
        return new ProjectResource($project);
    }

    public function store(StoreProjectRequest $request)
    {
        $project = $request->validated();
        $userId = $request->user()->id;
        $project['creator'] = $userId;
        Project::create($project);
        return response()->json("Project created");
    }

    public function update(StoreProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return response() ->json("Project updated");
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return response() ->json("Project deleted");
    }


    
}
