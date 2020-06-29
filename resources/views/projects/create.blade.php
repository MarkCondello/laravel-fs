@extends('layout')

@section('content')
    <h1>CREATE NEW PROJECT</h1>
    <form action="/projects" method="POST">
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
                    <small>{{ $errors->get('description')[0]  }}</small>
                </div>
            @endif
        </div>
        <button type="submit" class="button hollow">Create project</button>
 
    </form>
@endsection