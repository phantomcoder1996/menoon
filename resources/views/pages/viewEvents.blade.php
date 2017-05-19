@extends("layouts.admin")
@section("viewEvents")
<div id="viewEvents">
    <h3>Select Event</h3><hr>
    <form method="POST" action="{{route('pages.viewEvents',[$event->id])}}">
        <select class="form-control" name="eventName" style="width:60%">
            @foreach($events as $event)
                <option name="{{$event->name}}">{{$event->name}}</option>
            @endforeach
        </select>
        <button type="submit"   class="btn" style="background-color:#2C3E50;color:white;" id="selectEvent" >Select Another Event</button>

    </form>

</div>
<br>
<button  class="btn" style="background-color:#2C3E50;color:white;" id="viewApp">View Applicants</button>
    @endsection