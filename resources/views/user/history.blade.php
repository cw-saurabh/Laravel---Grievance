
@extends('user.usernav', ['id' => '1'])

@section('grievances')

<div style="margin-left:20px;margin-right:20px;padding-top:10px">
<h2>History Of Grievances:</h2>
<hr>
{{$status=""}}
@if(count($grvs)>0)
  
  @foreach($grvs as $grv)
        
        
  <div class="panel panel-default">
  {{-- return ("hello"); --}}
  <?php 
  if($grv->status==1)
  $status="Resolved";
  else 
  $status="Pending";
  ?>
  <div class="panel-heading" style="background-color:#0230C1; "><h3 style="color:white;"><span style="color:white;">{{$grv->subject}}</span><span style="float:right;font-size:16px">Status : {{$status}}</h3></span> </div>
    <div class="panel-body"> <small>Received on : {{$grv->created_at}} 
    </small>
    <a class="btn btn-default " style="float:right; " href="/u/showreportfinal/{{$grv->id}}">View Report</a>
    <?php 
    // if($grv->status==1)
    // echo "
    // <a class=\"btn \" style=\"float:right; background-color:#0230C1; color:white;\" href=\"/u/showreportfinal/$grv->id\">View Final Report</a>  
    // ";
    ?>
    </div>
  </div>
  
  @endforeach

  {{$grvs->links()}}
@else

<p>No Grievances Found</p> 

@endif



@endsection