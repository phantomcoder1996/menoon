
@extends("layouts.viewEvents")
@section("content")
<br><br>
<div style="height:auto;" class="divPage">


<!--setting small name for the course-->
  <div class="box"><h4 style="margin-left:20%">{{$event->name}}:</h4></div>
  <br> <br> <br> <br> 
  <!-- container -->
  <div class="w3-container" style="margin-left:3%">
<!--The Full Title of the Course-->
<h3>{{$event->title}}</h3>
  <br>
  <h4 style="display:inline;color:#B2EBF9">Upcoming session: {{$event->start_date}} — {{$event->end_date}}.</h4>
      <hr align="center" width="65%" style="border-color:lightgray; width:90%">
 
 
 <h4 style="display:inline;">Place </h4>
 <h4 style="display:inline; margin-left:13%">{{$event->place}},{{$event->country}}. </h4>
 <hr align="center" width="65%" style="border-color:lightgray; width:90%">
 
 <h4 style="display:inline;">Certification </h4>
 <h4 style="display:inline; margin-left:8%">{{$event->certificate}}</h4>
      <hr align="center" width="65%" style="border-color:lightgray; width:90%">
 
<h4 >About The Event</h4>
<br>
 <p>{{$event->description}} </p>

 <br>
 </div>

  <!-- Trigger the modal with a button -->
  <a type="button" href="#myModal" class="w3-btn" data-toggle="modal" data-target="#myModal" style="background-color:#2C3E50;color:white;margin-left:4%;display:inline;font-family:Open Sans;overflow: hidden; text-decoration: none;">Enroll</a>
 <a type="button" class="w3-btn" href="/iqtest/{{$event->id}}" style="background-color:#2C3E50;color:white;margin-left:2%;display:inline;font-family:Open Sans;overflow: hidden; text-decoration: none;">Take Quiz</a>
<br><br><br>




 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

          <!-- Modal -->

          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <img class="img-responsive pull-right modal-title" src="http://i76.imgup.net/accepted_c22e0.png">
              <h4 class="modal-title" style="margin-top:2%">Payment Details</h4>
          </div>
          <div class="modal-body">
              <label for="cardNumber">CARD NUMBER</label><br>
              <input
                      type="tel"
                      class="form-control"
                      name="cardNumber"
                      placeholder="Valid Card Number"
                      autocomplete="cc-number"
                      required autofocus
              /><br>
              <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span>
                  <span class="visible-xs-inline">EXP</span> DATE
              </label>
              <br>
              <input
                      type="tel"
                      class="form-control"
                      name="cardExpiry"
                      placeholder="MM / YY"
                      autocomplete="cc-exp"
                      required
              />
              <br>
              <label for="cardCVC">CV CODE</label><br>
              <input
                      type="tel"
                      class="form-control"
                      name="cardCVC"
                      placeholder="CVC"
                      autocomplete="cc-csc"
                      required
              /><br>
              <label for="couponCode">COUPON CODE</label><br>
              <input type="text" class="form-control" name="couponCode" /><br>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#2C3E50;color:white">Close</button>
              <button type="button" class="btn btn-default" style="background-color:#2C3E50;color:white" >Submit</button>

          </div>

      </div>
</div>
</div>

</div>

@endsection
@section("nav")

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#2C3E50">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color:white">
                    MeNoon LLC
                </a>
            </div>

            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route("pages.home")}}" style="color:white">Home</a></li>
                    <li><a href="{{route("home.about")}}" style="color:white">About</a></li>
                    <li><a href="{{route("pages.events")}}" style="color:white">Upcoming Events</a></li>
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
        </div>
        <!-- /.container -->
    </nav>

    @include("pages.register")


    @include("pages.login")


    @include("pages.feedback")

    @include("pages.forget")



    @include("pages.messages")

    @if(Session::has('score'))

        <script>$("#fb_success_modal2").modal("show");</script>
    @endif
@endsection

