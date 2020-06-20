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
    <form action="/task/{{$task->id}}" method="POST">
      @csrf
      @method('patch')
      <label {{ $task->completed ? 'style=text-decoration:line-through;' : ''}}>{{$task->description}}
        <input type="checkbox" {{ $task->completed ? 'checked' : null}} name="completed" onChange="this.form.submit()"/>
      </label>
     </form>
</div>
@endforeach
@endif
@endsection