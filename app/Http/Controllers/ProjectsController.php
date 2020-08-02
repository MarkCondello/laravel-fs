<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;
use App\Mail\ProjectSend;
use App\Http\Resources\ProjectCollection;
use App\Http\Requests\ProjectValidation;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ProjectCreated;
use App\Notifications\ProjectCreatedSlack;
use App\Notifications\NewProject;;

class ProjectsController extends Controller
{
    // public function __construct(){
    //     //$this->middleware('can:update,project')->except('index', 'store', 'create');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$projects = Project::where('owner_id', auth()->id())->get();
        // cache()->rememberForever('stats', function(){
        //     return [
        //         'visits' => 2000,
        //         'bounces' => 1300,
        //         'users' => 20,
        //     ];
        // });
        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectValidation $request)
    {
        $validProject = $request->validated();
        $validProject['owner_id'] = auth()->id();       
        $project = Project::create($validProject);

        //send mail using mailable
        Mail::to($project->author->email)->send(
            new ProjectSend($project)
        );

        //send notification instead
        // $project->author->notify(new ProjectCreated($project, $project->author));
        // $project->author->notify(new NewProject($project, $project->author));
        //$project->author->notify(new ProjectCreatedSlack($project, $project->author));
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Filesystem $file)
    // {
    //  dd($file);
    // }
    public function show(Project $project, Twitter $twitter)
    {
        abort_if(\Gate::denies('update', $project), 403);
        //dd($twitter);
         //$this->authorize('update', $project);
         //abort_if($project->owner_id !== auth()->id(), 403);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
       // $this->authorize('update', $project);
        // abort_if(\Gate::denies('update', $project), 403);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectValidation $request, Project $project)
    {

        $project->update($request->validated());
        //ToDo: create an update notication
       // $project->author->notify( new ProjectEdited($project, $project->author) );
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
         $project->delete();
         return redirect('/projects');
    }

    public function list(){
        //dd(Project::all());
        return new ProjectCollection(Project::all());
            return json($projects);
    }
}
