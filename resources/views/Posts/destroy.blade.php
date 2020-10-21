@extends('Layout.app')

@section('content')

    <div class="container">
        <div class="row">
            
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
                <div class="container" style="padding:10px">
                    <h5 class="title">Remove This item? </h5>
                    <div class=" float-right">
                        {!!Form::open(['action'=>['PostController@delete',$post->id],'class'=>'pull-right']) !!}
                        {{Form::hidden ('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}
                    <a href="../posts/{{$post->id}}/edit" class="btn btn-danger">Yes</a>
                        <a href="../posts" class="btn btn-success">No</a>
                    </div>
                </div>
        </div>
    </div>
@endsection