@extends('Layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="title">
            <h2>Services</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <ul class="list-group">
            @foreach ($services as $service)

                <li class="list-group-item">{{$service}}</li>
    
            @endforeach
            
        </ul>
    </div>
</div>   

@endsection