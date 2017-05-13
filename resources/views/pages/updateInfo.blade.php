@extends("layouts.profile")


@section("update")

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="img/person.svg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                           User 3bit
                        </div>
                        <div style="height:0px;overflow:hidden">
                            <input type="file" id="fileInput" name="fileInput" />
                        </div>
                   <button class="btn" style="background-color:#2C3E50;color:white" onclick="chooseFile();">Update Pic</button>
                    <button class="btn" style="background-color:#2C3E50;color:white; display:none" id="save">Save</button>
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

                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <form method="POST"  id="profileForm">
                        <h3>Profile Setting</h3><hr>
                        <div class="form-group">

                            <label for="usr">First Name:</label>
                            <input type="text" class="form-control" id="usr" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="usr2">Last Name:</label>
                            <input type="text" class="form-control" id="usr2" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="usrName">User Name:</label>
                            <input type="text" class="form-control" id="usrName" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="add">Address:</label>
                            <input type="text" class="form-control" id="add" style="width:60%">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd"  style="width:60%">
                        </div>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </form>
                    <form method="POST" style="display:none" id="accountForm">
                        <div class="form-group">
                            <h3> Change Password</h3><hr>
                            <label for="old">Old Password:</label>
                            <input type="password" class="form-control" id="old" style="width:60%">
                           <br><label for="new">New Password:</label>
                            <input type="password" class="form-control" id="new" style="width:60%">
                            <br><label for="conf">Confirm Password:</label>
                            <input type="password" class="form-control" id="conf" style="width:60%">
                            </div>
                            <br>
                        <div class="form-group">
                            <h3> Change User Name</h3><hr>
                            <label for="usrName">User Name:</label>
                            <input type="text" class="form-control" id="usrName" style="width:60%">
                        </div>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>

                    </form>
                    <form method="POST" style="display:none" id="mailForm">
                        <div class="form-group">
                            <h3> Change Emails</h3><hr>
                            <label for="pmail">Primary Email:</label>
                            <input type="text" class="form-control" id="pmail" style="width:60%">
                            <br><label for="amail">Add Email:</label>
                            <input type="text" class="form-control" id="amail" style="width:60%">

                        </div>
                        <button type="submit"  class="btn" style="background-color:#2C3E50;color:white;">&nbsp&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp&nbsp&nbsp</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function chooseFile() {
            $("#fileInput").click();
            $("#save").show();
        }
        function profileForm() {
            $("#mailForm").hide();
            $("#accountForm").hide();
            $("#profileForm").show();

        }
        function mailForm() {

            $("#profileForm").hide();
            $("#accountForm").hide();
            $("#mailForm").show();
        }
        function accountForm() {
            $("#mailForm").hide();
            $("#profileForm").hide();
            $("#accountForm").show();
        }
    </script>
@endsection





