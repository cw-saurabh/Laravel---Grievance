@extends('cm.cellnav', ['id' => '1'])

@section('content')

<div class="container">
<h2>{{$grv->subject}}</h2><hr>
    
<strong>Grievance  Description : </strong><br><br>
    <div class="panel panel-default">

    
    <div class="panel-body">{{$grv->description}}</div>

   
    </div>
    {!! Form::open(['action'=>'GrievanceController@storerep','method'=>'POST']) !!}

    {{ Form::hidden('gid', $grv->id ) }}
    
    

    <div class="form-group">

    
 
            {{Form::label('desc','Report Description')}}
            <br><br>
            {{Form::textarea('desc','',['class'=>'form-control border border-warning','placeholder'=>'Write Your Report Here'])}}

    </div>


    {{ Form::submit('Submit Report',['class'=>'btn btn-info' ])}}

       
  
    
    {!! Form::close() !!}
  </div>
 



@endsection