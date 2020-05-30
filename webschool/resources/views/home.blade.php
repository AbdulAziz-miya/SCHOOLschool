@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Post</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<a href="/posts/create"class ="btn btn-success">create post</a>
<br>
                  <a >Your posts</a>
                  @if(count($posts)>0)
                  <table class="table table-striped">
                  <tr>
                      <th>Title</th>
            
                
                  @foreach( $posts as $post)
                    <tr>
                      <td>{{$post->title}}</td>
                      <td><a  href="/posts/{{$post->id}}/edit"class="btn btn-info">Edit</a>
                    <td>{!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delet',['class'=>'btn btn-danger right'])}}
                    {!!Form::close()!!}
                </td>
            </td>
    </tr>
                  @endforeach
                </table>
                @else 
                <p>  you have no post</p>
                  @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
