@extends('layouts.createAdminLayout')

@section('content')
    <div class="page-header iqTestHeader">Create Admin</div>
    <div class="w3-container w3-padding-16">
    <div class="w3-card-4 w3-border w3-border-grey w3-padding-24" >
        <div class="container w3-margin" >
        <form action="/createAdmin" id="createAdminForm" method="post" name="createAdminForm"class="w3-padding-16">
            {{ csrf_field() }}
            <div class="form-group" id="fullnamediv" >
                <label class="control-label" for="fullname" style="color:grey"> Full Name</label>
                <input class="form-control" id="fullname" name="fullname" placeholder="choose name" required="" title="Please enter admin's name" type="text">
            </div>



            <div class="form-group" id="admin_username">
                <label class="control-label" for="username" style="color:grey"> UserName</label>
                <input class="form-control" id="username" name="username" placeholder="choose name" required="" title="Please enter admin's username" type="text">
            </div>

            <div class="form-group" id="admin-email">
                 <label class="control-label" for="email" style="color:grey">Email</label>
                <input class="form-control" id="email" name="email" placeholder="example@gmail.com" required="" title="Please enter admin's email" type="email" value="">
            <div class="form-group" id="admin-password">
                <label class="control-label" for="password" style="color:grey">Password</label>
                <input class="form-control" id="password" name="password" placeholder="******" required="" title="Please choose password for admin" type="password" value="">
            </div>
            <div class="form-group">
                <label class="control-label" for="password-confirm" style="color:grey">Confirm Password</label> <input class="form-control" id=
                "password-confirm" name="password_confirmation" placeholder="******" type="password">
            <div class="form-group" id="admin-country-code">
                <label class="control-label" for="admin-country-code" style="color:grey"> Country code</label>
                <input class="form-control" id="countrycode" name="countrycode" placeholder="Enter country code" required="" title="Please enter country code" type="text">

            <div class="form-group" id="admin-phonenumber">
                <label class="control-label" for="phonenumber" style="color:grey"> Phonenumber</label>
                <input class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter phonenumber" required="" title="Please enter phonenumber" type="text"> 

            <div class="form-group" id ="Admin-role">
                <label class="col-md-4 control-label" style="color:grey">Role</label>
                <div class=" selectContainer">

                    <select id="events_select" name="role" class="form-control" required onchange="show_events();">
                        <option value="">None</option>
                        <option value="event_interviewer">Event interviewer</option>
                        <option value="approval">Approval</option>
                        <option value="event_creator">Event Creator</option>
                        <option value="media_uploader">Media Uploader</option>
                        <option value="tagger">Tagger</option>
                        <option value="event_attendance">Event attendance</option>
                        <option value="data_entry">Data entry</option>

                    </select>

                </div>
            </div>

            <div class="form-group" id ="current_events" style="display:none;">
                <label class="col-md-4 control-label" style="color:grey">Event</label>
                <div class="selectContainer">

                    <select name="cur_events" class="form-control" id="event_options" name="event_options"  onchange="show_events">
                        <option value="">None</option>

                    </select>

                </div>
            </div>

            <div class="form-group">
                <div class='input-group date' id='datepicker'>
                    <input type='date' class="form-control" name="exp_date" placeholder="YY-MM-DD"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>






            <div class="form-group">

                <button class="btn btn-primary">Create</button>
            </div>
        </form>



</div>
    </div>

    </div>

    <div class="alert1" id="adminAlertDiv">
        <span class="closebtn1" onclick="this.parentElement.style.display='none';">&times;</span>
        <p  id="adminAlert">

            @foreach($errors->createAdmin->all() as $mes)
            {{$mes}}
<hr>
                @endforeach

            {{--{{$errors->createAdmin->first('countrycode')}}   </p>--}}</p>
    </div>



    {{--<script>--}}
        {{--$( function() {--}}
            {{--$( "#datepicker" ).datepicker();--}}
        {{--} );--}}
    {{--</script>--}}

    {{--<script>--}}

        {{--function show_events()--}}
        {{--{var list=document.getElementById('events_select');--}}
          {{--var selected=list.options[list.selectedIndex].value;--}}
             {{--if(selected=="event_interviewer"||selected=="event_attendance"||selected=="event_creator")--}}
             {{--{--}}
                 {{--//get_events();--}}
                 {{--$('#current_events').show();--}}
             {{--}--}}
             {{--else {--}}
                {{--// var list=document.getElementById('events_select');--}}
                {{--// list.selectedIndex=0;--}}

                 {{--$('#current_events').hide();--}}


             {{--}--}}



        {{--}--}}
{{--function get_events()--}}
{{--{--}}
    {{--var xmlhttp;--}}
    {{--if (window.XMLHttpRequest) {--}}
        {{--xmlhttp = new XMLHttpRequest();--}}
    {{--} else {--}}
        {{--// code for older browsers--}}
        {{--xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");--}}
    {{--}--}}
    {{--xmlhttp.onreadystatechange = function() {--}}
        {{--if (this.readyState == 4 && this.status == 200) {--}}
            {{--var arr=JSON.parse(this.responseText);--}}
            {{--var select=document.getElementById('event_options');--}}
            {{--for(var i=0;i<arr.length;i++)--}}
            {{--{--}}
                {{--var option=document.createElement('option');--}}
                {{--option.value=arr[i].id;--}}
                {{--option.innerHTML=arr[i].name;--}}

                {{--select.appendChild(option);--}}
            {{--}--}}



        {{--}--}}
    {{--};--}}
    {{--xmlhttp.open("GET", "/eventNames", true);--}}

    {{--xmlhttp.send();--}}
{{--}--}}

        {{--$(document).ready(function(){if($('#adminAlert').text().length==0){$('#adminAlertDiv').hide();}else{$('#adminAlertDiv').show("slow");}});--}}

       {{--var body=document.getElementsByTagName('body')[0];--}}
        {{--body.addEventListener("load",get_events,false);--}}


    {{--</script>--}}
    @endsection


