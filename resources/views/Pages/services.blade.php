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
        <ul class="list-group" style="width:100%">
            @foreach ($services as $service)

                <li class="list-group-item" style="padding:3%; text-align:center;"><b>{{$service}}</b></li>
    
            @endforeach
            
        </ul>
    </div>
</div>   

@endsection