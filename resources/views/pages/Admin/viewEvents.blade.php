@extends("layouts.admin")
@section("viewEvents")
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
<div id="viewEvents" >
    <h3 style="margin-left:10%">Select Event</h3><hr>
    <form method="POST" action="{{route('pages.Admin.setAttendence')}}" id="myForm">
        {!! csrf_field() !!}
        <select class="form-control" name="eventName" style="width:60%;margin-left:10%">
            @foreach($events as $event)
                <option name="{{$event->name}}">{{$event->name}}</option>
            @endforeach
        </select><br><br>

          </form>
    <button  class="btn" onclick="viewApp();" style="background-color:#2C3E50;color:white;margin-left:10%">View Applicants</button>
    <button  class="btn" onclick="setAttend();" style="background-color:#2C3E50;color:white;margin-left:10%">Set Attendence</button>

</div>
<br>
    <script>
        function viewApp() {
            document.getElementById('myForm').action = "{{route('pages.Admin.viewApp')}}";
           // console.log(document.getElementById('myForm').action);
            document.getElementById('myForm').submit();
        }
            function setAttend() {
                document.getElementById('myForm').action="{{route('pages.Admin.setAttendence')}}";
              //  console.log(document.getElementById('myForm').action);
                document.getElementById('myForm').submit();
            }
    </script>
   @endsection