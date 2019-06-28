@extends('cm.cellnav', ['id' => '0'])

@section('content')

<div style="margin-left:20px;margin-right:20px;padding-top:10px">

<h2>Grievances:</h2><hr>

@if(count($grvs)>0)

        @foreach($grvs as $grv)
        

            <div class="panel panel-default">
                {{-- return ("hello"); --}} 
              <div class="panel-heading" style="background-color:#0230C1; "><h3 style="color:white" >{{$grv->subject}}</h3></div>
              <div class="panel-body"> <small>Received on : {{$grv->created_at}}
              <a href="/write/{{$grv->id}}" style="float:right" class="btn btn-default">Write a Report</a>
               
               </small>
    
              
              </div> 
               
            </div>
          </div>
        @endforeach

        {{$grvs->links()}}
        
    
@else
    
      <p>No Grievances Found</p> 
     
@endif



@endsection
