@extends("layouts.admin")
@section("viewEvents")
<div id="viewEvents" >
    <h3 style="margin-left:10%">Select Event</h3><hr>
    <form method="POST" action="{{route('pages.viewApp')}}" >
        {!! csrf_field() !!}
        <select class="form-control" name="eventName" style="width:60%;margin-left:10%">
            @foreach($events as $event)
                <option name="{{$event->name}}">{{$event->name}}</option>
            @endforeach
        </select><br><br>
        <button  class="btn" type="submit" style="background-color:#2C3E50;color:white;margin-left:10%" id="viewApp">View Applicants</button>

    </form>

</div>
<br>
   @endsection