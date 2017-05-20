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
                           {{ Auth::guard('web_admins')->user()->name }}} <span class="caret"></span>
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
<br>
<br>
<br>
 <div style="border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #dddddd;
    width: 300px;
    border-radius: 25px;">Approve / Dissaprove Recent Tags 
      <button type="button" class="btn btn-default " >
      <span class="glyphicon glyphicon-tag" aria-hidden="true" onclick="window.location='{{ route("tagAdmin.appdis") }}'" ></span>       


      </button></div>


  <div style="border: 2px solid #a1a1a1;
    padding: 10px 40px; 
    background: #dddddd;
    width: 300px;
    border-radius: 25px;">Remove existing tags
     <button type="button" class="btn btn-default " >
      <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="window.location='{{ route("tagAdmin.remove") }}'" ></span>       


      </button> </div>
 


@endsection