<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  {{-- jquery for categories for particular cell members  --}}
<style>
body {
  font-family:'Cambria';
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFC300;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 10px 8px 6px 16px;
  text-decoration: none;
  font-size: 21px;
  color: black;
  display: block;
}

.sidenav a:hover {
  background-color: #0230C1;
  color:white;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 18px; /* Increased text to enable scrolling */
  padding: 0px 20px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.dropdown {
  /* position: relative; */
  display: inline-block;
  width: 160px;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #0230C1}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>
</head>
<script>
        if({{$id}}=='0')
        $(document).ready(function(){
        $("#0").css("color","#FFFFFF");  
        $("#0").css("background-color","#0230C1");
        });
        else if({{$id}}=='1')
        $(document).ready(function(){
        $("#1").css("color","#FFFFFF");  
        $("#1").css("background-color","#0230C1");
        });    
    </script>
        
    <body>
    
    <div class="sidenav">
        
            <!-- Authentication Links -->
            @guest
                <a  id="0" style="text-decoration:none;" href="{{ route('login') }}">Login</a>
                
                @if (Route::has('register'))
                    <a id='1'   style="text-decoration:none;" href="{{ route('register') }}">{{ __('Register') }}</a>
                    
                @endif
            @else
            @endguest
        
           
        </div>
    
    <div class="main">
    <br><br>
      @yield('content')
      
    </div>
       
    </body>
    </html> 
    
    
    