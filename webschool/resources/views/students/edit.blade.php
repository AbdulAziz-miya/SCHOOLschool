
    @extends('layouts.app')
    @section('content' )
       
        <section class="col-md-8">
        <div class="card mb-6">
            <h5 class="card-title text-center">Update informations of student</h5>

            {!! Form::open(['action'=>'StudentsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group ">
            {{ Form::label('name','Name')}}
            {{Form::text('Name'," ",['class'=>'form-control','placeholder'=>'name'])}}
    
        </div> 
        <div class="form-group">
            {{ Form::label('id','Id_Number')}}
            {{Form::text('id'," ",['class'=>'form-control','placeholder'=>'Id_Number'])}}
    
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
                Form::label('class','Class')
            }}
              {{
                Form::text('class'," ",['class'=>'form-control','placeholder'=>'Class'])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('section','Section')
            }}
              {{
                Form::text('section'," ",['class'=>'form-control','placeholder'=>'Setion'])
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
                Form::label('father ','Father Name')
            }}
              {{
                Form::text('father'," ",['class'=>'form-control','placeholder'=>'father name'])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('mother','Mother Name')
            }}
              {{
                Form::text('mother'," ",['class'=>'form-control','placeholder'=>'mother name'])
            }}


        </div>
        <div class="form-group">
            {{
                Form::label('contact','Contact NO.')
            }}
              {{
                Form::text('contact'," ",['class'=>'form-control','placeholder'=>'+977'])
            }}


        </div>
        <div  class="form-group">
            {{
                Form::file('cover_image')}}
   
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
           {!! Form::close() !!}
        </div>
    </div>
</div>

</section>
 @endsection