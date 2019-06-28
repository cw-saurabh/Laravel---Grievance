{{--@extends ('incuser.navbar')--}}
@extends ('user.usernav', ['id' => '0'])


     @section('grievances')
     <h1 style="color: #0230C1;"> Form</h1>
        
        {!! Form::open(['action' => 'GrievanceController@store','method'=>'POST']) !!}
        <div class="form-group ">

            {{Form::label('category','Category')}}
            <br>
            {{Form::select('category', ['1' => 'Academics', '2' => ' Cleanliness','3' => ' Infrastructure','4' => 'Harassment','5' => 'Disciplinary Action'],['class'=>'form-control border border-warning'])}}
        </div>
       
        <div class="form-group">
            {{Form::label('subject','Subject')}}
            {{Form::text('subject','',['class'=>'form-control border border-warning ','placeholder'=>'Subject'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('description','Grievance Description')}}
                {{Form::textarea('description','',['class'=>'form-control border border-warning','placeholder'=>'Grievance Complaint'])}}

        </div>

        {{ Form::submit('Submit',['class'=>'btn btn-warning' ])}}

           
      
        
        {!! Form::close() !!}
 
     
     @endsection
 