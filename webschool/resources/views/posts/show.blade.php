@extends('layouts.app')
 @section('content' )

 <a href="/posts" class="btn btn-success"> Go back</a>

     <h1> {{$post->title}}</h1>
     <div class ="col-md-4 col-sm-4">
      <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
  </div>  
     <div> {{$post->body}}
        </div>
     <small> Written on {{$post->created_at}} </small>
     <hr>
     @if(!Auth::guest())
     
     <a href="/posts/{{$post->id}}/edit" class="btn btn-defult">edit</a>

{!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delet',['class'=>'btn btn-danger'])}}
      {!!Form::close()!!}
      @endif
      
@endsection

