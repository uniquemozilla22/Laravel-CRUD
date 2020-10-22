@extends('Layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="container" style="padding:10px">
                <a href="../posts" class="btn btn-danger">Go Back</a>
                <div class=" float-right">
                <a href="../posts/{{$post->id}}/edit" class="btn btn-success">Edit Post</a>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card col-12 text-center">
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->desc}}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Created at: {{$post->created_at}}</small>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="container">
                {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'p-2 col-12']) !!}
        
                {{Form::hidden ('_method','DELETE')}}
    
                {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:100%'])}}
    
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection