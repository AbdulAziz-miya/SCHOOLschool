<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index(){
      
      

     return view('pages.index');
    }
    public function aboutus(){
      
        return view('pages.aboutus');
       }
    
    public function create(){
        return view('students.create');
    }
    public function teachers(){
        return view('teachers.images');
    }
    public function teachersform(){
        return view('teachers.create');
    }
    public function galary(){
        return view('images');
    }
    public function notices(){
        return view('students.notice');
    }
    
    public function about()
    {
        return view("pages.about");

    } 

    
   
}
