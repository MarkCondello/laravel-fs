@extends('layout')

@section('content')
    <h1>CREATE NEW PROJECT</h1>
    <form action="/projects" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project title"/>
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <button type="submit" class="button hollow">Create project</button>
    </form>
@endsection