@if($errors->any())
    <div class="callout alert">
        <ul> 
        @foreach($errors->all() as $error)
        <li><small>{{ $error }}</small></li>
        @endforeach
        </ul>
    </div>
@endif