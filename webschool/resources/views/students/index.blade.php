
@extends('layouts.app')
@section('content' )
    @if(count($students)>0)
    @foreach($students as $student)
    <div class ="well">
        <div class="row">
           <h3> <a href="/students/{{$student->id}} "> {{$student->id}} </a></h3>
           <h3> <a href="/students/{{$student->id}} ">{{$student->name}} </a></h3>
           <h3> <a href="/students/{{$student->id}} ">{{$student->email}} </a></h3>
           <h3> <a href="/students/{{$student->id}} ">{{$student->class}} </a></h3>
           <h3> <a href="/students/{{$student->id}} ">{{$student->section}} </a></h3>
           
           
           </div>  
       
       </div>
   </div>
        @endforeach 
        {{ $students->links()}}
        @else  
        <p> oops! no student found</p>
        @endif

@endsection