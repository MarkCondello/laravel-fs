<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ProjectTaskController extends Controller
{
    //

    public function update(Request $request, Task $task){
        $task_completed = $request->completed;
        if( $task_completed ):
            $task->update(['completed' => true]);
        else:
            $task->update(['completed' => false]);
        endif;
        return redirect()->back();
        dd($task_completed, $task);
    }
}
