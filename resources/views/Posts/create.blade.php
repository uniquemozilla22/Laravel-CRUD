@extends('Layout.app')


@section('content')

    {!! Form::open(['action'=>'PostController@store','method'=>'POST'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Description')}}
        {{Form::text('body','',['class'=>'form-control','placeholder'=>'Description'])}}
    </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!!Form::close()!!}

@endsection