@extends('layouts.adminLayout')


@section('content')
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: #021637;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">MeNooN LLC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li ><a href="#" data-toggle="modal" data-target="#loginModal" ><span class="glyphicon glyphicon-user"></span> Log In</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#registerModal" "><span class="glyphicon glyphicon-log-in"></span> Sign Up &nbsp&nbsp&nbsp</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    
                @endif


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<br>
<br>
  <h2>Tags Request</h2>
 @foreach($tags as $tag)

<div class="w3-container w3-center ">
<div class="w3-card w3-twothird" >
   
     

        @if($tag->type === 'img')
         <div class="w3-container w3-half">
            
          <img src="/storage/{{$tag->avatar}}" class="img-thumbnail" width="50%" height="30%" >
           <p>{{$tag->fname}} {{$tag->lname}} wants to be taged</p>
             <br>
              <br>
              
           </div>    

    
   <div class="w3-container w3-half">
  
        <img src="/storage/{{$tag->pic}}" class="img-thumbnail" width="50%" height="30%"  >
         <p> Event picture</p>
         <br>
         <br>
     
     
     </div>  

         
            <div class="w3-section w3-center">
         <button  class="w3-button w3-teal w3-round-xlarge" onclick="myFunctiondisapp()" id="{{$tag->id}}">Dissapprove</button>
         <button  class="w3-button w3-teal w3-round-xlarge" onclick="myFunctionapp()" id="{{$tag->id}}">
          Approve</button>
          
            </div>
   @else       
  
 <div class="w3-container w3-half">
            
         <img src="/storage/{{$tag->avatar}}" class="img-thumbnail" width="50%" height="30%" >
           <p>{{$tag->fname}} {{$tag->lname}} wants to be taged</p>
             <br>
              <br>
              
           </div>    

      
   <div class="w3-container w3-half">
  
        <video class="img-thumbnail" class="img-thumbnail" width="50%" height="30%" controls>
          <source src="/storage/{{$tag->pic}}" >
                    
          </video> 
         <p> Event video</p>
         <br>
         <br>
     
     
     </div>  

         
            <div class="w3-section w3-center">
         <button  class="w3-button w3-teal w3-round-xlarge" onclick="myFunctiondisapp()" id="{{$tag->id}}">Dissapprove</button>
         <button  class="w3-button w3-teal w3-round-xlarge" onclick="myFunctionapp()" id="{{$tag->id}}">
          Approve</button>
          
            </div>



 @endif

</div>
</div>
@endforeach

<script >
    
     function myFunctionapp() {
var e = window.event,
       btn = e.target || e.srcElement;
  // alert(btn.id);
        // var id=this.id;
        var x=/tagapp1/+btn.id;
        console.log(x);
  var xhttp = new XMLHttpRequest();     
xhttp.open("GET", x, true);
xhttp.send();
location.reload();
}
</script>
<script >

   function myFunctiondisapp() {
var e = window.event,
       btn = e.target || e.srcElement;
   //alert(btn.id);
        // var id=this.id;
        var x=/tagdisapp1/+btn.id;
        console.log(x);
  var xhttp = new XMLHttpRequest();     
xhttp.open("GET", x, true);
xhttp.send();
location.reload();
}
</script>

 
 


@endsection