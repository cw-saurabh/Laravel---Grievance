@extends('cm.cellnav', ['id' => '1'])

@section('content')
<br>
{{$status=""}}
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#0230C1;color:white ">
      <h2>Grievance : {{$grv->subject}}</h2>
      Received on : {{$grv->created_at}}
    </div>
  </div>
<hr>
<h2>Reports:
<a href="/write/{{$grv->id}}" style="float:right;" class="btn btn-default">Write a Report</a>  
</h2>
<br>


@if(count($reports)>0)
    
        @foreach($reports as $report)
        
        
            <div class="panel panel-default">
                <div class="panel-body"> Date : {{$report->created_at}}  </small></div> 
                <?php 
                if($report->status==0)
                $status="Pending";
                if($report->status==2)
                $status="Rejected";
                if($report->status==1)
                $status="Approved";
                
                ?>
              <div class="panel-body"> Description : {{$report->description}}  <h4 style="float:right;font-family:'Cambria';">Status : {{$status}} </h4></div> 
              
            </div>
          
        @endforeach

        {{-- {{$grvs->links()}} --}}
        
    
@else
    
      <p>No Grievances Found</p> 
     
@endif



@endsection
