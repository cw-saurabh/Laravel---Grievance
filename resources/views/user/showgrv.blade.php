@extends('user.usernav', ['id' => '1'])

@section('grievances')

<div style="margin-left:20px;margin-right:20px;padding-top:10px">
<h2>{{$grv->subject}}</h2>
    <div class="panel panel-default">

    <div class="panel-body">{{$grv->description}}</div>
    
   
    </div>
    {{-- <form action="{{url('/remarks')}}" method="post">
      @csrf 
       {{ csrf_field() }}
  
    {{Form::label('report','Report:')}}
                     {{Form::textarea('description','',['class'=>'form-control border border-warning','rows'=> 4 ,'placeholder'=>'Report of Greivance Resolution'])}}<br>
                    
                                    
                                       <a href="/cell_member/app/sub/{{$grv->id}}" type="button" class="btn btn-success" style="none;">Submit Report</a></div>
                                     
                                     </form> --}}
  </div>
 



@endsection