@extends('layout')

@section('content')
    <h1>Update {{$project->title}}</h1>
{{--    @dump($project)--}}
{{--    Send request to update method --}}
    <form action="/projects/{{$project->id}}" method="POST">
        @method('patch')
        @csrf
        <div>
            <input type="text" name="title" placeholder="{{$project->title}}"/>
        </div>
        <div>
            <textarea name="description" placeholder="{{$project->description}}"></textarea>
        </div>
        <button type="submit" class="button hollow">Update project</button>
    </form>
@endsection