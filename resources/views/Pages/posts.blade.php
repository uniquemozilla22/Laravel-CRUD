@extends('Layout.app')

@section('content')
<div class="container">
    <div class="row">
            <a href="#" class="btn btn-success" style="width: 100%; text-align:center; margin:10px;">Create a Post</a>
    </div>
</div>
<ul class="list-group">
    <li class="list-group-item">
        <div class="row">
            <div class="col-8">

                <h3 class="card-title">Post1</h3>
                <p class="frames-description">THis is the description for the post 1<p>
            </div>
            <div class="col-4" style="text-align: center" >
                <a href="#" class="btn btn-success" style="padding :5%;margin:2%">Show Post</a>
                <a href="#" class="btn btn-danger" style="padding :5%;margin:2%">Delete</a>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-8">

                <h3 class="card-title">Post2</h3>
                <p class="frames-description">THis is the description for the post 2<p>
            </div>
            <div class="col-4" style="text-align: center" >
                <a href="#" class="btn btn-success" style="padding :5%;margin:2%">Show Post</a>
                <a href="#" class="btn btn-danger" style="padding :5%;margin:2%">Delete</a>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-8">

                <h3 class="card-title">Post3</h3>
                <p class="frames-description">THis is the description for the post 3<p>
            </div>
            <div class="col-4" style="text-align: center" >
                <a href="#" class="btn btn-success" style="padding :5%;margin:2%">Show Post</a>
                <a href="#" class="btn btn-danger" style="padding :5%;margin:2%">Delete</a>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row">
            <div class="col-8">

                <h3 class="card-title">Post4</h3>
                <p class="frames-description">THis is the description for the post 4<p>
            </div>
            <div class="col-4" style="text-align: center" >
                <a href="#" class="btn btn-success" style="padding :5%;margin:2%">Show Post</a>
                <a href="#" class="btn btn-danger" style="padding :5%;margin:2%">Delete</a>
            </div>
        </div>
    </li>

</ul>
@endsection