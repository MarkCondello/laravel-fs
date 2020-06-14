@extends('layout')

@section('content')
    <ul class="grid-x">
   @foreach($projects as $project)
       <li class="small-12">
           <p> <a href="projects/{{$project->id}}">{{$project->title}}</a></p>
           <div class="grid-x">
               <form action="projects/{{$project->id}}/edit" method="GET">
{{--                   @method('patch')--}}
                   @csrf
                   <button type="submit" class="button danger">Update</button>
               </form>
               <form action="projects/{{$project->id}}" method="POST">
                   @method('delete')
                   @csrf
                   <button type="submit" class="button alert">Delete</button>
               </form>
           </div>
       </li>
   @endforeach
    </ul>
@endsection