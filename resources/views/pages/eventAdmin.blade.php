@extends ("layouts.admin")

@section ("createEvent")
    <div class="profile-content" >
        <h3 style="margin-left:20%">Create New Event</h3><hr>
        <form action="{{url("createEvent")}}"  method="POST"  style="margin-left:20%">
               {{csrf_field()}}
            <div class="form-group">

                <label for="name"> Name:</label>
                <input type="text" class="form-control" id="name" style="width:60%" name="name">
            </div>
            <div class="form-group">
                <label for="sdate">Start Date:</label>
                <input type="date" class="form-control" id="sdate" style="width:60%" name="startDate">
            </div>
            <div class="form-group">
                <label for="edate">End Date:</label>
                <input type="date" class="form-control" id="edate" style="width:60%" name="endDate">
            </div>
            <div class="form-group">
                <label for="cnt">Country:</label>
                <input type="text" class="form-control" id="cnt" style="width:60%" name="country">
            </div>
            <div class="form-group">
                <label for="tt">Title:</label>
                <input type="text" class="form-control" id="tt" style="width:60%" name="title">
            </div>
             <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" class="form-control" id="place" style="width:60%" name="place">
            </div>

            <div class="form-group">
                <label for="des">Description:</label>
                <textarea type="text" class="form-control" id="des"  style="width:60%" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="des">Certificate:</label>
                <select class="form-control" id="des"  style="width:60%" name="certificate" name="certificate">
                    <option name="yes">YES</option>
                    <option name="no">NO</option>
                </select>
            </div>
            <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspCreate&nbsp&nbsp&nbsp&nbsp&nbsp</button>
        </form>
    </div>
    @endsection