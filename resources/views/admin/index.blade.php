@extends('admin.adminnav', ['id' => '0'])

@section('grievances')

<h2>New Grievances:</h2>
<hr>

@if(count($grvs)>0)
    
        @foreach($grvs as $grv)
        
        <div class="container">
            <div class="panel panel-default">
                {{-- return ("hello"); --}} 
              <div class="panel-heading" style="background-color:#0230C1; "><h3 style="color:white;">{{$grv->subject}}</h3></div>
              <div class="panel-body"> <small>Received on : {{$grv->created_at}} 
               
               </small>
               <a class="btn btn-default" style="float:right" href="/a/asked/{{$grv->id}}">Ask for Report</a>
              
               
               <a class="btn btn-default" style="float:right; margin-right: 25px;" href="/a/showgrievance/{{$grv->id}}">View Grievance</a>
               
              </div> 
               
            </div>
          </div>
        @endforeach

        {{$grvs->links()}}
        
    
@else
    
      <p>No Grievances Found</p> 
     
@endif



@endsection