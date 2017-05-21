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
                    <li><a href="#"  data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-log-in"></span> Sign Up &nbsp&nbsp&nbsp</a></li>
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
 
 <div class="container" >
         

        <div class="w3-container">
            <div>
                <hr align="center" width="25%" style="margin-left:37%;margin-top:65px;height:1px;border:none;color:#333;background-color:#000;">
                <h2 style="text-align:center;font-family:Amiko">Recent Events</h2>
                <h2 style="text-align:center;font-family:Amiko">Please choose an Event to upload its own Photos and videos</h2>
                <hr align="center" width="25%" style="margin-left:37%;height:1px;border:none;color:#333;background-color:#333;">
            </div>

            <ul>
                @foreach($events as $event)
                <li class="course">
                    <div class="course-holder">
                        <div class="holder-top">
                            <img src="https://alison.com/images/courses/336" >
                        </div>
                        <div class="holder-bottom">
                            <a style="overflow: hidden; text-decoration: none;color:black" href="{{route('taguservieweventpic',[$event->id])}}">
                                <h4> {{$event->name}}</h4>

                                <p>{{$event->title}} ....</p>
                                <h4> {{$event->country}}</h4>
                                <br>
                            </a>
                        </div>

                    </div>
                    <div class="section-shadow"></div>
                </li>
               @endforeach
            </ul>

        </div>


    </div>


@endsection