@extends('layouts.galleryhome')

@section('content')
 <div class="container" >
         

        <div class="w3-container">
            <div>
                <hr align="center" width="25%" style="margin-left:37%;margin-top:65px;height:1px;border:none;color:#333;background-color:#000;">
                <h2 style="text-align:center;font-family:Amiko">Recent Events</h2>
                <h2 style="text-align:center;font-family:Amiko">Please choose an Event to View its own Photos and videos</h2>
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
                            <a style="overflow: hidden; text-decoration: none;color:black" href="{{route('pages.galleryview',[$event->id])}}">
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

