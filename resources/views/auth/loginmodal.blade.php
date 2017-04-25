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
                            <label class="control-label" >Username</label>
                            <input id="username" type="text" title="Please enter you username" required value="" name="username" class="form-control">
                            {{-- <div id="form-errors-username" class="has-error"></div> --}}
                            <span class="help-block">
                                <strong id="form-errors-username"></strong>
                            </span>
                            <span class="help-block small">Your username</span>
                        </div>
                        <div class="form-group" id="password-div">
                            <label class="control-label" for="password">Password</label>
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
                        
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                      </a>
                                
                   </div> 
                    <!--  <a href="#forgetpass" data-toggle="modal" style="color:black;" role="button"  data-dismiss="modal">Forget Password?</a>-->
                   
                                          <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
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






 <div class="modal fade" id="forgetpass" tabindex="-1" role="dialog" hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel panel-filled">
            
               <div class="modal-header">Reset Password</div>
                <div class="modal-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>