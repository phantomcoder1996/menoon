@extends('layouts.adminLayout')


@section('content')


    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: #021637;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{route('tagAdmin.view')}}">MeNooN LLC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guard('web_admins')->guest())
                        <li ><a href="#" data-toggle="modal" data-target="#loginModal" ><span class="glyphicon glyphicon-user"></span> Log In</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#registerModal" ><span class="glyphicon glyphicon-log-in"></span> Sign Up &nbsp&nbsp&nbsp</a></li>
                    @else
                        <li>
                            <a style="color:white;" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
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
  <div class="modal fade" id="myModal11122" role="dialog">
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
    
        $('#myModal11122').modal('show');
   
</script>                
    @endif


@foreach ($image as $tags)
<div class="w3-container">
  <h2></h2>

  <div class="w3-card-4 w3-dark-grey" style="width:50%">

    <div class="w3-container w3-center" id="{{$tags->id}}">
    @if($tags->type === 'img')
       <h5>Event picture </h5>
      <img src="/storage/{{$tags->pic}}" alt="Avatar" style="width:80%">
      @else 
        <h5>Event video </h5>
       <video class="img-thumbnail" controls>
          <source src="/storage/{{$tags->pic}}" >
                    
          </video>   
      @endif
      @foreach($utags as $tag)
      <div class="w3-container w3-half">
        <img src="/storage/{{$tag->avatar}}" alt="Avatar" style="width:80%">
       <button type="button" class="btn btn-default btn-sm" id ="{{$tag->user_id}}" onclick="removeadd()">
          <span class="glyphicon glyphicon-plus" id ="{{$tag->user_id}}" onclick="removeadd()"></span> {{$tag->fname}} {{$tag->lname}}
        </button>
        </div>
      
      
      @endforeach
      
    </div>

  </div>
</div>
  @endforeach

  <script >

   function removeadd() {
var e = window.event,
       btn = e.target || e.srcElement;
   alert(btn.id);
        // var id=this.id;
        var x='#'+btn.id
        var id = $(x).closest("div").prop("id");
        console.log(id);
       var x=/tagr11/+btn.id+'/'+id;
      console.log(x);
   var xhttp = new XMLHttpRequest();     
 xhttp.open("GET", x, true);
 xhttp.send();
 location.reload();
}
</script>

@endsection