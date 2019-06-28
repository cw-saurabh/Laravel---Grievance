@extends('layouts.app',['id'=>'1'])



     @section('content')
     <h1 style="color: #0230C1;"> Form</h1>
        
        {!! Form::open(['action' => 'GrievanceController@changePassword','method'=>'POST']) !!}
       
        <div class="form-group">
            {{Form::label('email','E-mail')}}
            {{Form::text('E-mail','',['class'=>'form-control border border-warning ','placeholder'=>'E-mail ID'])}}
        </div>
        <div class="form-group">
                {{Form::label('password','Password')}}
                {{Form::text('Password','',['class'=>'form-control border border-warning ','placeholder'=>'Password'])}}
            </div>
        
        <div class="form-group">
                    {{Form::label('password','Password')}}
                    {{Form::text('CPassword','',['class'=>'form-control border border-warning ','placeholder'=>'Password'])}}
                </div>
            
        

        {{ Form::submit('Submit',['class'=>'btn btn-warning' ])}}

           
      
        
        {!! Form::close() !!}
 
     
     @endsection
 