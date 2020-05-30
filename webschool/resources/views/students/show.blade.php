@extends('layout.app')
@section('content')

<a href="/posts" class="btn btn-success"> Go back</a>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Id</th>
                <th scope="col">E-mail</th>
                <th scope="col">Class</th>
                <th scope="col">Section</th>
                <th scope="col">Address</th>
                <th scope="col">Fathername</th>
                <th scope="col">Mother name</th>       
                <th scope="col">Contact</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student-> class}}</td>
                    <td>{{ $student->section }}</td>
                    <td>{{ $student->ads}}</td>
                    <td>{{ $student->father}}</td>
                    <td>{{ $student->mother}}</td>
                    
                    <td>{{ $student->contact}}</td>
                    <div class ="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_image/{{$student->cover_image}}">
                    </div>  
                  
                    

                        
                    </td>
                        @if(!Auth::guest())
                        <a href="/students/{{$student->id}}/edit" class="btn btn-sm btn-warning">Edit</a>

                        {!!Form::open(['action'=>['StudentsController@destroy',$student->id,$student->class],'method'=>'POST','class'=>'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delet',['class'=>'btn btn-danger'])}}
                            {!!Form::close()!!}
                            @endif


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






