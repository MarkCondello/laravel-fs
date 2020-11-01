@extends('layout')

@section('content')
 <h2>{{$project->title}}</h2>
 <hr>
  <p>{{$project->description}}</p>
<hr>

   {{-- Repurpose these form to be a Vue component which posts with axios updates to the 2 endpoints and gets data from the project object --}}

{{-- May need an endpoint for all tasks to get live updates --}}
{{-- Tasks are currently received throught the project --}}

<project-tasks 
{{-- projectId="{{$project->id}}"  --}}
get-url="{{ route('project.task.index', $project) }}"
></project-tasks>


{{-- @if($project->tasks->count())
<h3>Tasks</h3>
  @foreach($project->tasks as $task)
  <div >
    <form action="/completed-task/{{$task->id}}" method="POST">
      @csrf
      @if($task->completed)
      @method('delete')
      @endif
      <label {{ $task->completed ? 'style=text-decoration:line-through;' : ''}}>{{$task->description}}
        <input type="checkbox" {{ $task->completed ? 'checked' : null}} name="completed" onChange="this.form.submit()"/>
      </label>
    </form>
  </div>
  @endforeach
@endif --}}

<hr>
<h3>Create tasks: </h3>
<form action="/task/create/{{$project->id}}" method="POST">
  @csrf
   <label>Task name
    <input type="text" name="description" />
  </label>
 
  <input type="submit" value="Add task" class="button bollow"/>
</form>

 @include('partials.errors') 
@endsection