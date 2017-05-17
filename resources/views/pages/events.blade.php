@extends("layouts.events")


@section("eventScripts")

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    {!! Html::script("js/events.js")!!}

    <!--javascript links -->




    <!-- Bootstrap Core JavaScript -->



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
                            <a style="overflow: hidden; text-decoration: none;color:black" href="{{route('pages.Events.View.index',[$event->id])}}">
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

    @include("pages.messages")

@endsection


