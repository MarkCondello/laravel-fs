@extends('layout')

@section('content')
 <h2>{{$project->title}}</h2>
 <hr>
   <p>{{$project->description}}</p>
   <hr>
@if($project->tasks->count())
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
@endif

<hr>
<h3>Create tasks: </h3>
<form action="/task/create/{{$project->id}}" method="POST">
  @csrf
   <!-- <input type="hidden" name="project_id" value="{{ $project->id}}" /> -->
  <label>Task name
    <input type="text" name="description" />
    @if($errors->has('description'))
        <div class="callout alert">
            <small>{{ $errors->get('description')[0]  }}</small>
        </div>
    @endif
  </label>
 
  <input type="submit" value="Add task" class="button bollow"/>
</form>

<!-- @include('partials.errors') -->
@endsection