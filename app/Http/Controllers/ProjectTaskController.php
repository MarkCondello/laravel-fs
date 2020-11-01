<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTaskController extends Controller
{
    //
    public function create(Project $project){
        
        $project->addTask( request()->validate([
            'description' => 'required|min:4|max:255',
            ])
        );

        return redirect()->back();
    }

    //get all tasks
    public function index(Project $project){
       return $project->tasks;
    }

    //this update method is not used
    // public function update(Task $task){
    //     request()->has('completed') ? $task->complete() : $task->incomplete();
    //     return redirect()->back();
    //     //$task->complete(request()->has('completed'));

    //     // $task->update([
    //     //     'completed' => request()->has('completed')
    //     // ]);
    // }
}
