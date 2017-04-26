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

@include("pages.register")


@include("pages.login")


@include("pages.feedback")

@include("pages.forget")


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