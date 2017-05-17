
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
                <div class="panel-body">
                    @if(Session::has('fail'))
                        <div class="row">
                            <div class="col-md-12">
                                <p class="alert alert-info">{{ Session::get('fail') }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="modal-body">
                        <form action="{{Route('login')}}" method="POST" id="loginForm" >
                            <div class="form-group" id="username-div">
                                {{ csrf_field() }}
                                <label class="control-label" style="color:grey">Username</label>
                                <input id="username" type="text" title="Please enter you username" required value="" name="username" class="form-control">
                                {{-- <div id="form-errors-username" class="has-error"></div> --}}
                                <span class="help-block">
                                <strong id="form-errors-username"></strong>
                            </span>
                                <span class="help-block small">Your username</span>
                            </div>
                            <div class="form-group" id="password-div">
                                <label class="control-label" for="password" style="color:grey">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                                <span class="help-block">
                                <strong id="form-errors-password"></strong>
                            </span>
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="form-group" id="login-errors">
                            <span class="help-block">
                                <strong id="form-login-errors"></strong>
                            </span>
                            </div>

                            <div class="form-group">

                                <a class="btn btn-link" href="/forget-password">
                                    Forgot Your Password?
                                </a>

                            </div>
                            <!--  <a href="#forgetpass" data-toggle="modal" style="color:black;" role="button"  data-dismiss="modal">Forget Password?</a>-->

                            <div class="form-group">
                                <div class="checkbox">
                                    <label style="color:grey">
                                        <input type="checkbox" name="remember" > Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
