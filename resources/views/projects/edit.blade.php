@extends('layout')

@section('content')
@can('update', $project)

    <h1>Update {{$project->title}}</h1>
 
    <form action="/projects/{{$project->id}}" method="POST">
        @method('patch')
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project title" value="{{old('title')}}"/>
            @if($errors->has('title'))
                <div class="callout alert">
                    <small>{{ $errors->get('title')[0]  }}</small>
                </div>
            @endif
        </div>
        <div>
            <textarea name="description" placeholder="Project description" value="{{old('description')}}"></textarea>
            @if($errors->has('description'))
                <div class="callout alert">
                    <small>{{ $errors->get('description')[0] }}</small>
                </div>
            @endif
        </div>
        <button type="submit" class="button hollow">Update project</button>
    </form>
  @else
  <p>"This aint yo project yo"</p>
  @endcan
@endsection

