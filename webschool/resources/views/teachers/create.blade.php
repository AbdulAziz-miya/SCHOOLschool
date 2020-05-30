
    @extends('layouts.app')
    @section('content' )
       
        <section class="col-md-8">
        <div class="card mb-6"><br><br> <br>
            <h5 class="card-title text-center">Apply  Now!</h5>

            {!! Form::open(['action'=>'StudentsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group ">
            {{ Form::label('name','Name')}}
            {{Form::text('Name'," ",['class'=>'form-control','placeholder'=>'name'])}}
    
        </div>   
         <div class="form-group">
            {{
                Form::label('contact','Contact NO.')
            }}
              {{
                Form::text('contact'," ",['class'=>'form-control','placeholder'=>'+977'])s
            }}


        </div>
      
        <div class="form-group">
            {{
                Form::label('email','E-mail')
            }}
              {{
                Form::text('email'," ",['class'=>'form-control','placeholder'=>'xyz@gmail.com'])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('degree ','degree')
            }}
              {{
                Form::text('degree'," ",['class'=>'form-control','placeholder'=>'graduat level'])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('experience','Experience')
            }}
              {{
                Form::textarea('experience'," ",['class'=>'form-control','placeholder'=>'experience in  '])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('years','Experienece year')
            }}
              {{
                Form::text('years'," ",['class'=>'form-control','placeholder'=>'Experience years'])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('per_address','Address')
            }}
              {{
                Form::text('per_address'," ",['class'=>'form-control','placeholder'=>'Address'])
            }}


        </div>
       
        <div class="form-group">
            {{
                Form::label('why','why')
            }}
              {{
                Form::textarea('why'," ",['class'=>'form-control','placeholder'=>'why  us?'])
            }}


        </div>
     
        <div  class="form-group">
            <h1>provide ur certificates(image)</h1>
            {{Form::file('cover_image')}}
   
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
           {!! Form::close() !!}
        </div>

    </div>
</div>

</section>
 @endsection