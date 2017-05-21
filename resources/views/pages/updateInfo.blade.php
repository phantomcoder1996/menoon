@extends("layouts.profile")


@section("update")

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                           User 3bit
                        </div>

                        <form method="POST" action="{{route("pages.updatePic")}}">
                            {{csrf_field()}}
                            <div style="height:0px;overflow:hidden">
                                <input type="file"  id="fileInput" name="pic" />
                            </div>
                   <a class="btn" style="background-color:#2C3E50;color:white" onclick="chooseFile();">Update Pic</a>
                    <button class="btn" type="submit" style="background-color:#2C3E50;color:white;" id="save">Save</button>
                        </form>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->

                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#" onclick="profileForm();">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Profile </a>
                            </li>
                            <li>
                                <a href="#" onclick="accountForm();">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Account </a>
                            </li>
                            <li>
                                <a href="#"  onclick="mailForm();">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Email </a>
                            </li>
<li>
                                <a href="#"  onclick="eventForm();">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Certificates </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <form method="POST"  id="profileForm" action="{{route("pages.updateInfo")}}">
                        {{csrf_field()}}
                        <h3>Profile Setting</h3><hr>
                        <div class="form-group">

                            <label for="usr">First Name:</label>
                            <input type="text" name="firstName" class="form-control" id="usr" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="usr2">Last Name:</label>
                            <input type="text" name="lastName" class="form-control" id="usr2" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="usrName">User Name:</label>
                            <input type="text" name="userName" class="form-control" id="usrName" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="add">Address:</label>
                            <input type="text" name="address" class="form-control" id="add" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" id="pwd"  style="width:60%" required="required">
                        </div>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        @if (!Auth::guest())
                            <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
                        @endif
                    </form>
                    <form method="POST" style="display:none" id="accountForm" action="{{route("pages.updateAccount")}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h3> Change Password</h3><hr>
                            <label for="old">Old Password:</label>
                            <input type="password" name="old" class="form-control" id="old" style="width:60%" required="required">
                           <br><label for="new">New Password:</label>
                            <input type="password" name="new" class="form-control" id="new" style="width:60%" required="required">
                            <br><label for="conf">Confirm Password:</label>
                            <input type="password" name="confirm" class="form-control" id="conf" style="width:60%" required="required">
                            </div>
                            <br>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        @if (!Auth::guest())
                            <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
                        @endif
                    </form><br><br>
                    <form method="POST" style="display:none" id="accountForm2" action="{{route("pages.Update_Account")}}">
                        {{csrf_field()  }}
                        <div class="form-group">
                            <h3> Change User Name</h3><hr>
                            <label for="usrName">User Name:</label>
                            <input type="text" name="userName" class="form-control" id="usrName" style="width:60%" required="required">
                            <label for="old"> Password:</label>
                            <input type="password" name="confirm" class="form-control" id="old" style="width:60%" required="required">
                        </div>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        @if (!Auth::guest())
                            <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
                        @endif
                    </form>
                    <form method="POST" style="display:none" id="mailForm" action="{{route("pages.updateEmail")}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h3> Change Emails</h3><hr>
                            <label for="pmail">Primary Email:</label>
                            <input type="text" name="primary" class="form-control" id="pmail" style="width:60%">

                            <br><label for="conf">Password:</label>
                            <input type="password" name="password" class="form-control" id="conf" style="width:60%" required="required">

                        </div>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        @if (!Auth::guest())
                            <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
                        @endif
                    </form>
                    <form method="POST" style="display:none"  id="eventForm"  action="{{route("pages.certificate")}}">
                       {{csrf_field()}}
                        <div class="form-group">
                            <h3> Request Certificate</h3><hr>
                            <label for="crt">Choose Event:</label>
                            <select  name="eventName" class="form-control" id="cre" style="width:60%">
                                @foreach($events as $event)
                                <option name="{{$event->event_name}}">{{$event->event_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspRequest&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        @if (!Auth::guest())
                            <input type="hidden" value= "{{Auth::user()->id}}" name="user_id" id="user_id"></input>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script>
        function chooseFile() {
            $("#fileInput").click();

        }
        function profileForm() {
            $("#mailForm").hide();
            $("#accountForm").hide();
            $("#accountForm2").hide();
            $("#eventForm").hide();
            $("#profileForm").show();

        }
        function mailForm() {

            $("#profileForm").hide();
            $("#accountForm").hide();
            $("#accountForm2").hide();
            $("#eventForm").hide();
            $("#mailForm").show();
        }
        function accountForm() {
            $("#mailForm").hide();
            $("#eventForm").hide();
            $("#profileForm").hide();
            $("#accountForm").show();
            $("#accountForm2").show();
        }
        function eventForm() {
            $("#mailForm").hide();
            $("#profileForm").hide();
            $("#accountForm").hide();
            $("#accountForm2").hide();
            $("#eventForm").show();
        }
    </script>
@endsection





