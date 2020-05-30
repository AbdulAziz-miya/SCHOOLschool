<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Student;
use DB;

class StudentController extends Controller
{ public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::orderBy("id",'dec')->pagination(15);
        return view('students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name','id','email','grade','section','ads','father','mother','contact']);

        
    If($request->hasFile('cover_image')){

        $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('cover_image')->getClientoriginalExtension();
    
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }
        else{
            $fileNameToStore="noimage.jpg";
        }


   $student= new Student;
    $student->name =$request ->input('Name');
    $student->id=auth()->user()->id;
   $student->email=$request->input('email');
   $student->class=$request->input('grade');
   $student->section=$request->input('section');
   $student->ads=$request->input('ads');
   $student->fathers=$request->input('father');
   $student->mother=$request->input('mother');
   $student->contact=$request->input('contact');
   $post->cover_image=$fileNameToStore;
   $student->save();
   return redirect('/post')->with('success','student registered');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$class)
    {
        $student=Student::find($id,$class);
        return view('students.show')->with('students',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $student=Student::find($id,$class);
     if((auth()->student()->id==$student->id)and( auth()->student()->class==$student->class))
     {
         return view('student.edit')->with('student',$student);
     }
     else
     {
         return redirect('/posts')->with('error','oops! ur not registered');
     }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$class)
    {
            $this->validate($request,['name','id','email','class','section','address','father','mother','contact']);
            $student=Student::find($id,$class);
            $student->name =$request ->input('Name');
            $student->id=auth()->user()->id;
            $student->email=$request->input('email');
            $student->class=$request->input('class');
            $student->section=$request->input('section');
            $student->address=$request->input('address');
            $student->fathers=$request->input('father');
            $student->mother=$request->input('mother');
            $student->contact=$request->input('contact');

            If($request->hasFile('cover_image')){

                $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extension=$request->file('cover_image')->getClientoriginalExtension();

                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
             }
            else{
                $fileNameToStore='noimage.png';
                }
        

            $student->save();
            return redirect('/posts')->with('success','student updated');
            
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$class)

    {
    $student=Student::find($id,$class);
    if((auth()->student()->id!=$student->id) and (auth()->student()->class!=$student->class))
    {
        return redirect('/posts')->with('error','unauthorized ');

    }
    if($student->cover_image!='noimage.jpg')
    {
        Storage::delete('Public/cover_image/'.$student->cover_image);
    }
   $student->delete();
   return redirect('/posts')->with('success',"student account delete");
    }
}

