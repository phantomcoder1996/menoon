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
                @if (Auth::guard('web_admins')->guest())
                    <li ><a href="#" data-toggle="modal" data-target="#loginModal" ><span class="glyphicon glyphicon-user"></span> Log In</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#registerModal" "><span class="glyphicon glyphicon-log-in"></span> Sign Up &nbsp&nbsp&nbsp</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           {{ Auth::guard('web_admins')->user()->name }} <span class="caret"></span>
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
 
<div style="margin-top: 20px;"> 
<h4 style="display:inline-block;
    float:left; margin-right: 15px;margin-left: 20px; padding-left: 20px;"> Add New Image/Video    </h4>

 <button class="w3-button w3-xlarge w3-circle w3-teal" data-toggle="modal" data-target="#myModal1">+</button>
</div>



<div class="row">
<div class="col-md-8">
 <h4 style="margin-left: 20px; padding-left: 20px;">  Image/Videos in event  </h4>
 </div>
</div>




  @foreach($event as $event)
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    @if( $event->type === 'img')
   
     <div class="w3-quarter">
     
    <img src="/storage/{{$event->pic}}" class="img-thumbnail"  width="304" height="236" >
       </div>   
      

      <button id="{{$event->id}}" class="w3-button w3-teal w3-round-xlarge" onclick="myFunction()">Delete</button>
     @else
     <div class="w3-quarter">
     
             <video class="img-thumbnail" controls>
          <source src="/storage/{{$event->pic}}" >
                    
          </video>     
     
     </div> 
      

      <button id="{{$event->id}}" class="w3-button w3-teal w3-round-xlarge" onclick="myFunction()">Delete</button>
  @endif
  </div>
     
     @endforeach
   

 <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('mediaAdmin.insert',[$id]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
                        
       
       <input  class="fileUpload btn btn-primary" type="file" name="pic" class="" data-multiple-caption="{count} files selected" multiple />

  
         <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
</form>
 
        </div>
        </div>
        </div>
        </div>




<script >
    function myFunction() {
var e = window.event,
       btn = e.target || e.srcElement;
   //alert(btn.id);
        // var id=this.id;
        var x=/mediauploader1/+btn.id;
        console.log(x);
  var xhttp = new XMLHttpRequest();     
xhttp.open("GET", x, true);
xhttp.send();
location.reload();
}
</script>
 @endsection


