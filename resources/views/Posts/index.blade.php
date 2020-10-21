@extends('Layout.app')

@section('content')
<div class="container">
    <div class="row">
            <a href="./posts/create" class="btn btn-success" style="width: 100%; text-align:center; margin:10px;">Create a Post</a>
    </div>
</div>
<ul class="list-group">

    @foreach ($posts as $post)
    <li class="list-group-item">
        <div class="row">
            <div class="col-8">

                <h3 class="card-title">{{$post->title}}</h3>
                <p class="frames-description">{{$post->desc}}<p>
            </div>
            <div class="col-4" style="text-align: center" >
            <a href="./posts/{{$post->id}}" class="btn btn-success" style="padding :5%;margin:2%">Show Post</a>
            <a href="./posts/delete/{{$post->id}}" class="btn btn-danger" style="padding :5%;margin:2%">Delete</a>
            </div>
        </div>
    </li>
        
    @endforeach

    <hr/>



</ul>
@endsection