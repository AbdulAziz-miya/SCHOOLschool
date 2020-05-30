<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('students.hello');
});

Route::get('/student','PagesController@create');
Route::get('/teachersform','PagesController@teachersform');
Route::get('/teachers','PagesController@teachers');
Route::get('/galary','PagesController@galary');
Route::get('notice','PagesController@notices');
Route::get('/aboutus',"PagesController@aboutus");
Route::get('/apply','PagesController@create');
Route::resource('posts','PostController');
Route::resource('students','StudentsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('a/', function () {
    return view('pages.student');
});

Route::get('/',"StudentController@index") ;
Route::get('/edit/{id}',"StudentController@edit") ;
Route::get('/show/{id}',"StudentController@show") ;
Route::get('/create',"StudentController@create") ;
Route::post('/store',"StudentController@store") ;
Route::post('/update/{id}',"StudentController@update") ;

Route::get('/b', function () {
    return view('welcome');
});
Route::get('/a', function () {
    return view('welcome');
});
Route:: get('/about',function(){
    return view('pages.about');
});

Route::get('/users/{id}/{name}',function($id,$name){
    return 'thsi is '.$name.$id;
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


