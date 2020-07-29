@extends('layout')

@section('content')
 
<h2  >Dashboard</h2>

<div class="callout">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @guest
    Login you...
    @else
    You are logged in!
    @endif
</div>
 
 
@endsection

