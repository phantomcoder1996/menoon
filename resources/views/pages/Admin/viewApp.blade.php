@extends("layouts.viewApp")

@section("viewApp")
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

    <div class="container">
<div id="app">
    <h3>Applicants Information</h3><hr>
    <table class="table table-hover" >

        <thead>
        <tr>
            <th>User Name</th>
            <th>Application Date</th>
            <th>IQ Score</th>
            <th>Money Paid</th>


        </tr>
        </thead>
        <tbody>
   @foreach($users as $user)
        <tr>

            <td>{{$user->username}}</td>
            <td>{{$user->application_date}}</td>
            <td>{{$user->iq_test_score}}</td>
            <td>{{$user->money_paid}}</td>

        </tr>

      @endforeach

        </tbody>
    </table>
    <br>
    <a   href="{{route("pages.Admin.viewEvents")}}" class="btn" style="background-color:#2C3E50;color:white;" id="viewApp">Choose another event</a>

</div>



    </div>

    @endsection