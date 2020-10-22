@extends('Layout.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="float-right p-2 col-12">
                    
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
                
                    {{Form::submit('Submit',['class'=>'btn btn-primary p-2'])}}
                    {!!Form::close()!!}
                    <br/>
                    {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST']) !!}
        
                    {{Form::hidden ('_method','DELETE')}}
        
                    {{Form::submit('Delete',['class'=>'btn btn-danger p-2'])}}
        
                    {!!Form::close()!!}
                        </div>
            </div>
        </div>
    </div>
</div>

    

        

@endsection