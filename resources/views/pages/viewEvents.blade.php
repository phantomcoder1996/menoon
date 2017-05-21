@extends("layouts.admin")
@section("viewEvents")
<div id="viewEvents" >
    <h3 style="margin-left:10%">Select Event</h3><hr>
    <form method="POST" action="{{route('pages.setAttendence')}}" id="myForm">
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
            document.getElementById('myForm').action = "{{route('pages.viewApp')}}";
           // console.log(document.getElementById('myForm').action);
            document.getElementById('myForm').submit();
        }
            function setAttend() {
                document.getElementById('myForm').action="{{route('pages.setAttendence')}}";
              //  console.log(document.getElementById('myForm').action);
                document.getElementById('myForm').submit();
            }
    </script>
   @endsection