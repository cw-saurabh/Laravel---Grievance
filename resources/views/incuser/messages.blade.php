
<div style="margin-left:20px;margin-right:20px;padding-top:10px">
@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach
@endif

@if(session('success'))
<br>
<div class="alert alert-success">
        
        {{session('success')}}
        <br>
    </div>
    @endif

    @if(session('error'))
    <br>
    <div class="alert alert-danger">
    
        {{session('error')}}
            <br>
        </div>
        @endif

     

