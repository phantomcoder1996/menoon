
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:#2C3E50">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top" style="color:white">MeNooN LLC</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{route("pages.home")}}" style="color:white">Home</a></li>
                <li><a href="{{route("home.about")}}" style="color:white">About</a></li>
                <li><a href="#" style="color:white">Upcoming Events</a></li>
                <li><a href="{{route("home.media")}}" style="color:white">Media</a></li>
                <li><a href="{{route("home.contact")}}" style="color:white">Contact Us</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li ><a href="#" data-toggle="modal" data-target="#loginModal" style="color:white"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#registerModal" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Sign Up &nbsp&nbsp&nbsp</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li >
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
                    <li>
                        <a data-toggle="modal" href="#fb_modal">Feedback</a>
                    </li>
                @endif


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>





@include("pages.feedback")



