@extends('user.usernav', ['id' => '1'])

@section('grievances')
<div style="margin-left:20px;margin-right:20px;padding-top:10px">
<br>
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#0230C1;color:white ">
      <h2>Grievance : {{$grv->subject}}</h2>   
    </div>
  </div>
<hr>
<h2>Grievance Details</h2><br>
<div class="panel panel-default">
    <div class="panel-body">
    Category    : {{$grv->category}}<br>
    Filed by    : {{$grv->user_email}}<br>
    Received On : {{$grv->created_at}}<br>
    Description : {{$grv->description}}<br>
    </div>
  </div><br>
<hr>  
<h2>Final Report</h2>
<br>


@if(count($reports)>0)
    
        @foreach($reports as $report)
        
        
            <div class="panel panel-default">
                <div class="panel-body"> Date : {{$report->created_at}}  </small></div> 

                <div class="panel-body"> Description : {{$report->description}}  <small> </small>
              
              </div> 
              
            </div>
          
        @endforeach

        {{-- {{$grvs->links()}} --}}
        
    
@else
    
      <p>No Report Found</p> 
     
@endif



@endsection
