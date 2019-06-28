@extends('admin.adminnav', ['id' => '1'])

@section('grievances')

<div style="margin-left:20px;margin-right:20px;padding-top:10px">
<h2>Pending Grievances : {{$category}}  



</h2><hr>

        
        @if(count($grvs)>0)
    
        @foreach($grvs as $grv)
        
        
            <div class="panel panel-default">
                
              <div class="panel-heading" style="background-color:#0230C1; "><h3 style="color:white;">{{$grv->subject}}</h3></div>
              <div class="panel-body"><small>Received on : {{$grv->created_at}} 
               
              </small>
              <?php
              if($grv->status==2)
              
              echo "<a  class=\"btn btn-default\" href=\"/a/showreports/$grv->id\" style=\"float:right;\">View Reports</a>";
              else
              echo "<p  style=\"float:right;margin-right:7px\"><small>No Follow-up</small></p>"; 
              
              ?>
              <a class="btn btn-default" style="float:right; margin-right: 25px;" href="/a/showgrievance/{{$grv->id}}">View Grievance</a>
              
              
              </div>
            </div>
        
        @endforeach
        {{$grvs->links()}}
        
    
@else
    
      <p>No Grievances Found</p> 
     
@endif


</div>

@endsection