@extends("layouts.setAttendence")
@section("attend")
    <div id="attend" >
        <h3 style="margin-left:10%">Select User</h3><hr>
        <form method="POST" action="{{url('set_attendence',['id' =>$users[0]->event_id]) }}" >
            {!! csrf_field() !!}
            <select class="form-control" name="username" style="width:60%;margin-left:10%">
                @foreach($users as $user)
                    <option name="{{$user->username}}">{{$user->username}}</option>

                @endforeach
            </select><br><br>
            <button  class="btn" type="submit" style="background-color:#2C3E50;color:white;margin-left:10%" >Set Attendence</button>
        </form>

    </div>
    <br>
@endsection