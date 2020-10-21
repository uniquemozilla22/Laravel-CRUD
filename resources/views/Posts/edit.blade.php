@extends('Layout.app')


@section('content')

    {!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'POST'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Description')}}
        {{Form::text('body',$post->desc,['class'=>'form-control','placeholder'=>'Description'])}}
    </div>
    {{Form::hidden ('_method','PUT')}}

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!!Form::close()!!}

@endsection