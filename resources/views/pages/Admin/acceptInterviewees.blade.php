@extends('Layouts.adminLayout')

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
    <div class="page-header iqTestHeader1">Interviewees</div>
    <div class="w3-container">
        <ul class="w3-ul w3-border">
            @if(!(count($users)==0))
            @foreach($users as $user)
               <div class="w3-card w3-margin">


                            <p>User name: {{$user->username}}</p>
                            <p>Event name: {{$user->title}}</p>
                            <p>Interview date: {{$user->interview_date_time}}</p>



                       <a  class="btn btn-default " style="margin-left:20%;margin-right:10%;margin-bottom: 1%;" href="/acceptUser/{{$user->user_id}}/{{$user->event_id}}">Accept</a>
                       <button  class="btn btn-default" style="margin-left:10%;margin-bottom: 1%;" data-toggle="modal" data-target="#reject_modal">Reject</button>



               </div>
            @endforeach
@endif
        </ul>

    </div>


    <div class="modal fade" id="reject_modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" >&times;</button>
                    <h4 class="modal-title" style="color:gray; text-align:center;font:Sans-serif">Reason for rejecting user</h4>
                </div>
                <div class="modal-body">


<form action="/rejectUser" method="post">
    {{csrf_field()}}
    <div class="form-group" id="reject">


        <textarea class="form-control" id="reason" name="reason" placeholder="   Reason for rejection" required></textarea>
    </div>
    @if(!(count($users)==0))
    <input type="hidden" value="{{$user->user_id}}" name="userid">
    <input type="hidden" value="{{$user->event_id}}" name="eventid">
    <button type="submit" class="btn btn-default" style="margin-left:45%; margin-top:10%;">Submit</button>
       @endif
</form>


                </div>





            </div>

        </div>
    </div>
@endsection