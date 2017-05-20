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


@if (session('status'))
  <div class="modal fade" id="myModal1112" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>{{ session('status') }}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
       <script type="text/javascript">
    
        $('#myModal1112').modal('show');
   
</script>                
    @endif


@foreach ($tags as $pic => $tags)
<div class="w3-container">
  <h2></h2>

  <div class="w3-card-4 w3-dark-grey" style="width:50%">

    <div class="w3-container w3-center">
      
      <img src="/storage/{{$pic}}" alt="Avatar" style="width:80%">
      <h5>Event</h5>
      <div class="w3-section">
      @foreach($tags as $tag)
      
       
       <button type="button" class="btn btn-default btn-sm" id ="{{$tag->id}}">
          <span class="glyphicon glyphicon-minus" id ="{{$tag->id}}" onclick="removetag()"></span> {{$tag->fname}} {{$tag->lname}}
        </button>
      
      @endforeach
      </div>
    </div>

  </div>
</div>
  @endforeach

  <script >

   function removetag() {
var e = window.event,
       btn = e.target || e.srcElement;
   //alert(btn.id);
        // var id=this.id;
        var x=/tagr1/+btn.id;
        console.log(x);
  var xhttp = new XMLHttpRequest();     
xhttp.open("GET", x, true);
xhttp.send();
location.reload();
}
</script>

@endsection