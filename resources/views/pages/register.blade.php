
<div class="modal fade" hidden="true" id="registerModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <div class="modal-body">
                        <form action="{{Route('register')}}" id="registerForm" method="post" name="registerForm">
                            <div class="form-group" id="register-fname">
                                <label class="control-label" for="fname" style="color:grey"> First Name</label> <input class="form-control" id="fname" name="fname"
                                                                                                                       placeholder="choose name" required="" title="Please enter you name" type="text">
                            </div>

                            <div class="form-group" id="register-lname">
                                <label class="control-label" for="lname" style="color:grey"> Last Name</label> <input class="form-control" id="lname" name="lname"
                                                                                                                      placeholder="choose name" required="" title="Please enter you name" type="text">
                            </div>

                            <div class="form-group" id="register-username">
                                <label class="control-label" for="name" style="color:grey"> UserName</label> <input class="form-control" id="username" name="username"
                                                                                                                    placeholder="choose name" required="" title="Please enter you name" type="text"> <span class=
                                                                                                                                                                                                           "help-block"><strong id="register-errors-username"></strong></span> <span class="help-block small">Your name</span>
                            </div>

                            <div class="form-group" id="register-email">
                                {{ csrf_field() }} <label class="control-label" for="email" style="color:grey">Email</label> <input class="form-control" id=
                                "email" name="email" placeholder="example@gmail.com" required="" title="Please enter you email" type="email"
                                                                                                                                    value=""> <span class="help-block"><strong id="register-errors-email"></strong></span> <span class=
                                                                                                                                                                                                                                 "help-block small">Your email</span>
                            </div>
                            <div class="form-group" id="register-password">
                                <label class="control-label" for="password" style="color:grey">Password</label> <input class="form-control" id="password" name=
                                "password" placeholder="******" required="" title="Please enter your password" type="password" value="">
                                <span class="help-block"><strong id="register-errors-password"></strong></span> <span class=
                                                                                                                      "help-block small">Your strong password</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password-confirm" style="color:grey">Confirm Password</label> <input class="form-control" id=
                                "password-confirm" name="password_confirmation" placeholder="******" type="password"> <span class=
                                                                                                                            "help-block"><strong id="form-errors-password-confirm"></strong></span>
                            </div>

                            <div class="form-group" id="register-address">
                                <label class="control-label" for="name" style="color:grey"> Address</label> <input class="form-control" id="address" name="address"
                                                                                                                   placeholder="choose name" required="" title="Please enter you name" type="text"> <span class="help-block"><strong id="register-errors-address"></strong></span> <span class="help-block small"></span>
                            </div>

                            <div class="form-group" id ="register-membership">
                                <label class="col-md-4 control-label" style="color:grey">Membership</label>
                                <div class="col-md-6 selectContainer">

                                    <select name="membership" class="form-control" required>
                                        <option value="">None</option>
                                        <option value="Normal">Normal</option>
                                        <option value="student">student</option>
                                        <option value="Member">Member</option>
                                        <option value="membandstud">Member & student</option>

                                    </select>
                                    <span class="help-block"><strong id="register-errors-membership"></strong></span> <span class="help-block small"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for='pic'class="col-md-4 control-label" style="color:grey">Profile picture</label>
                                <div class="col-md-6">
                                    <input type="file" name="pic" class="" data-multiple-caption="{count} files selected" multiple />
                                </div>
                            </div>


                            <div class="form-group">

                                <button class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
