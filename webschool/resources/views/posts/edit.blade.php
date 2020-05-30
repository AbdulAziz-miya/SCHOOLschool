@extends('layouts.app')
@section('content' )
    <h1> Edit post</h1>
    {!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title','Title')}}
        {{Form::text('title', $post->title,['class'=>'form-control','placeholder'=>'Title'])}}

    </div> 
    <div class="form-group">
        {{ Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body'])}}

    </div>
    <div  class="form-group">
            {{
                Form::file('cover_image')
            }}
  
    {{
        Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
       {!! Form::close() !!}
@endsection