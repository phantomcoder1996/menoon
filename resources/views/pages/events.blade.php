@extends("layouts.events")
@section("eventContent")
    <div id="page-top" data-spy="scroll" data-target=".navbar-fixed-tosp">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
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
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#" style="color:white">Home</a></li>
                        <li><a href="#About" style="color:white">About</a></li>
                        <li><a href="{{route('pages.events')}}" style="color:white">Upcoming Events</a></li>
                        <li><a href="#Media" style="color:white">Media</a></li>
                        <li><a href="#Contact" style="color:white">Contact Us</a></li>
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

        <!-- Intro Header -->
        <header class="intro" style="height:720px">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="container">
                                <br>
                                <h1 style=" font-family: 'Open Sans Condensed', sans-serif;">Customize your search</h1>


                                <form action="{{url("Filter")}}" method="POST">
                                    {{csrf_field()}}
                                    <select style=" width:80%;margin-left:10%" name="country" >
                                        <option value="" style="color:black;"> </option>
                                        @foreach($events as $event)

                                        <option value="{{$event->country}}" style="color:black;">{{$event->country}}</option>

                                            @endforeach
                                    </select>
                                    <input type="date" name="Date" placeholder="Date" style="margin-left:10%" ><br>
                                    <input type="submit" name="Filter" value="Filter" style=" margin-left:35%;width:30%;background-color:rgba(87,198,255,.5); font-family: 'Open Sans Condensed', sans-serif; text-align: center;padding: 4px 8px;"  >



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="event">
         @if($flag)
             <script>alert("there is no event in that day")</script>
             @endif
        </div>
        <br><br><br>


    </div>
    <div class="modal fade" hidden="true" id="registerModal" role="dialog" tabindex="-1">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <div class="modal-body">
                            <form action="{{Route('register')}}" id="registerForm" method="post" name="registerForm">
                                <div class="form-group" id="register-fname">
                                    <label class="control-label" for="fname" style="color:grey"> First Name</label> <input class="form-control" id="fname" name="fname"
                                                                                                                           placeholder="choose name" required="" title="Please enter you name" type="text">
                                </div>

                                <div class="form-group" id="register-lname">
                                    <label class="control-label" for="lname" style="color:grey"> Last Name</label> <input class="form-control" id="lname" name="lname"
                                                                                                                          placeholder="choose name" required="" title="Please enter you name" type="text">
                                </div>

                                <div class="form-group" id="register-username">
                                    <label class="control-label" for="name" style="color:grey"> UserName</label> <input class="form-control" id="username" name="username"
                                                                                                                        placeholder="choose name" required="" title="Please enter you name" type="text"> <span class=
                                                                                                                                                                                                               "help-block"><strong id="register-errors-username"></strong></span> <span class="help-block small">Your name</span>
                                </div>

                                <div class="form-group" id="register-email">
                                    {{ csrf_field() }} <label class="control-label" for="email" style="color:grey">Email</label> <input class="form-control" id=
                                    "email" name="email" placeholder="example@gmail.com" required="" title="Please enter you email" type="email"
                                                                                                                                        value=""> <span class="help-block"><strong id="register-errors-email"></strong></span> <span class=
                                                                                                                                                                                                                                     "help-block small">Your email</span>
                                </div>
                                <div class="form-group" id="register-password">
                                    <label class="control-label" for="password" style="color:grey">Password</label> <input class="form-control" id="password" name=
                                    "password" placeholder="******" required="" title="Please enter your password" type="password" value="">
                                    <span class="help-block"><strong id="register-errors-password"></strong></span> <span class=
                                                                                                                          "help-block small">Your strong password</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password-confirm" style="color:grey">Confirm Password</label> <input class="form-control" id=
                                    "password-confirm" name="password_confirmation" placeholder="******" type="password"> <span class=
                                                                                                                                "help-block"><strong id="form-errors-password-confirm"></strong></span>
                                </div>

                                <div class="form-group" id="register-address">
                                    <label class="control-label" for="name" style="color:grey"> Address</label> <input class="form-control" id="address" name="address"
                                                                                                                       placeholder="choose name" required="" title="Please enter you name" type="text"> <span class="help-block"><strong id="register-errors-address"></strong></span> <span class="help-block small"></span>
                                </div>

                                <div class="form-group" id ="register-membership">
                                    <label class="col-md-4 control-label" style="color:grey">Membership</label>
                                    <div class="col-md-6 selectContainer">

                                        <select name="membership" class="form-control" required>
                                            <option value="">None</option>
                                            <option value="Normal">Normal</option>
                                            <option value="student">student</option>
                                            <option value="Member">Member</option>
                                            <option value="membandstud">Member & student</option>

                                        </select>
                                        <span class="help-block"><strong id="register-errors-membership"></strong></span> <span class="help-block small"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for='pic'class="col-md-4 control-label" style="color:grey">Profile picture</label>
                                    <div class="col-md-6">
                                        <input type="file" name="pic" class="" data-multiple-caption="{count} files selected" multiple />
                                    </div>
                                </div>


                                <div class="form-group">

                                    <button class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        @if(Session::has('fail'))
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="alert alert-info">{{ Session::get('fail') }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="modal-body">
                            <form action="{{Route('login')}}" method="POST" id="loginForm" >
                                <div class="form-group" id="username-div">
                                    {{ csrf_field() }}
                                    <label class="control-label" style="color:grey">Username</label>
                                    <input id="username" type="text" title="Please enter you username" required value="" name="username" class="form-control">
                                    {{-- <div id="form-errors-username" class="has-error"></div> --}}
                                    <span class="help-block">
                                <strong id="form-errors-username"></strong>
                            </span>
                                    <span class="help-block small">Your username</span>
                                </div>
                                <div class="form-group" id="password-div">
                                    <label class="control-label" for="password" style="color:grey">Password</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                                    <span class="help-block">
                                <strong id="form-errors-password"></strong>
                            </span>
                                    <span class="help-block small">Your strong password</span>
                                </div>
                                <div class="form-group" id="login-errors">
                            <span class="help-block">
                                <strong id="form-login-errors"></strong>
                            </span>
                                </div>

                                <div class="form-group">

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>

                                </div>
                                <!--  <a href="#forgetpass" data-toggle="modal" style="color:black;" role="button"  data-dismiss="modal">Forget Password?</a>-->

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label style="color:grey">
                                            <input type="checkbox" name="remember" > Remember Me
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="modal fade" id="forgetpass" tabindex="-1" role="dialog" hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="panel panel-filled">

                    <div class="modal-header">Reset Password</div>
                    <div class="modal-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label" style="color:grey">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            var registerForm = $("#registerForm");
            registerForm.submit(function(e){
                e.preventDefault();
                var formData = registerForm.serialize();

                $( '#register-errors-username' ).html( "" );
                $( '#register-errors-address' ).html( "" );
                $( '#register-errors-membership' ).html( "" );
                $( '#register-errors-email' ).html( "" );
                $( '#register-errors-password' ).html( "" );
                $("#register-fname").removeClass("has-error");
                $("#register-lname").removeClass("has-error");
                $("#register-username").removeClass("has-error");
                $("#register-address").removeClass("has-error");
                $("#register-membership").removeClass("has-error");
                $("#register-email").removeClass("has-error");
                $("#register-password").removeClass("has-error");


                $.ajax({
                    url:'/register',
                    type:'POST',
                    data:formData,
                    success:function(data){
                        $('#registerModal').modal( 'hide' );
                        location.reload();
                    },
                    error: function (data) {
                        console.log(data.responseText);
                        var obj = jQuery.parseJSON( data.responseText );

                        if(obj.username){
                            $("#register-username").addClass("has-error");
                            $( '#register-errors-username' ).html( obj.username );
                        }

                        if(obj.address){
                            $("#register-address").addClass("has-error");
                            $( '#register-errors-address' ).html( obj.address);
                        }
                        if(obj.membership){
                            $("#register-membership").addClass("has-error");
                            $( '#register-errors-membership' ).html( obj.membership);
                        }
                        if(obj.email){
                            $("#register-email").addClass("has-error");
                            $( '#register-errors-email' ).html( obj.email );
                        }
                        if(obj.password){
                            $("#register-password").addClass("has-error");
                            $( '#register-errors-password' ).html( obj.password );
                        }
                    }
                });
            });
        });

        var loginForm = $("#loginForm");
        loginForm.submit(function(e) {
            e.preventDefault();
            var formData = loginForm.serialize();
            $('#form-errors-username').html("");
            $('#form-errors-password').html("");
            $('#form-login-errors').html("");
            $("#username-div").removeClass("has-error");
            $("#password-div").removeClass("has-error");
            $("#login-errors").removeClass("has-error");
            $.ajax({
                url: '/login',
                type: 'POST',
                data: formData,
                success: function(data) {

                    $('#loginModal').modal('hide');
                    location.reload();
                },
                error: function(data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON(data.responseText);
                    if (obj.username) {
                        $("#username-div").addClass("has-error");
                        $('#form-errors-username').html(obj.username);
                    }
                    if (obj.password) {
                        $("#password-div").addClass("has-error");
                        $('#form-errors-password').html(obj.password);
                    }
                    if (obj.error) {
                        $("#login-errors").addClass("has-error");
                        $('#form-login-errors').html(obj.error);
                    }
                }
            });
        });



        var foregtForm = $("#forgetpass");
        foregtForm.submit(function(e) {
            e.preventDefault();
            var formData = foregtForm.serialize();
            $('#form-errors-email').html("");

            $("#email-div").removeClass("has-error");

            $.ajax({
                url: "password/email",
                type: 'POST',
                data: formData,
                success: function(data) {
                    console.log(data.responseText);

                },
                error: function(data) {
                    console.log(data.responseText);
                    var obj = jQuery.parseJSON(data.responseText);
                    if (obj.email) {
                        $("#email-div").addClass("has-error");
                        $('#form-errors-email').html(obj.email);
                    }

                }
            });
        });
    </script>
@endsection

@section("eventScripts")

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    {!! Html::script("js/events.js")!!}

    <!--javascript links -->




    <!-- Bootstrap Core JavaScript -->
    {!! Html::script("vendor/bootstrap/js/bootstrap.min.js")!!}



    <!-- Plugin JavaScript -->
    {!! Html::script("vendor/scrollreveal/scrollreveal.min.js")!!}
    {!! Html::script("vendor/magnific-popup/jquery.magnific-popup.min.js")!!}


    <!-- Theme JavaScript -->
    {!! Html::script("js/creative.min.js")!!}


@endsection

@section("courses")
    <div class="container" >


        <div class="w3-container">
            <div>
                <hr align="center" width="25%" style="margin-left:37%;margin-top:65px;height:1px;border:none;color:#333;background-color:#000;">
                <h2 style="text-align:center;font-family:Amiko">Recent Events</h2>
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
                            <a href="{{route('pages.Events.View.index',[$event->id])}}">
                                <h4> {{$event->name}}</h4>
                                <p>{{$event->title}} ....</p>
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