@extends('admin.adminnav', ['id' => '1'])

@section('grievances')
<div style="margin-left:20px;margin-right:20px;padding-top:10px">
{{$status=""}}
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
<h2>Reports:<button id="togglehistory" class="btn btn-default" style="float:right"  >View All Reports</button></h2>
<br>


@if(count($reports_l)>0)
    
        @foreach($reports_l as $report)
        
        
            <div class="panel panel-default">
                <div class="panel-body"> Date : {{$report->created_at}}  </small></div> 
              <div class="panel-body"> Description : {{$report->description}} <a class="btn btn-success" style="float:right" href="/a/onapprove/{{$grv->id}}"> Approve </a><a class="btn btn-warning" style="float:right; margin-right: 25px;" href="/a/onreject/{{$grv->id}}">Reject</a></div> 
              
              
            </div>
          
        @endforeach
        <br>
        
 
        
    
@else
    
      <p>No Latest Report Found</p>
      <br>
      {{-- <a class="btn btn-info" href="/a/asked/{{$grv->id}}" style="margin-right:30px">Ask for Report</a> --}}

     
@endif



        <div id="history" style="display:none">
                <hr><br>
            @foreach($reports as $report)
            <?php 
if($report->status==0)
$status="Pending";
if($report->status==2)
$status="Rejected";
if($report->status==1)
$status="Approved";

?>
            <div class="panel panel-default">
                    <div class="panel-body"> Date : {{$report->created_at}}  </small></div> 
                    <div class="panel-body"> Description : {{$report->description}} <h4 style="float:right;font-family:'Cambria';">Status : {{$status}} </h4></div> 
            </div>
            @endforeach
                            
        </div>
        

<script>
    $(document).ready(function(){
        $("#togglehistory").click(function(){
            $("#history").toggle();

            
        });
    });
</script>

@endsection

