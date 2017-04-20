

<div class="jumbotron w3-light-blue" style="margin-top:50px;">

<h4 style="font-size:30px;color:#ffffff">Newsletter Subscription</h4>
<hr>
<p style="text-align:center;color:#ffffff">Don't miss our events! Subscribe to our newsletter now.</p>

  <div class="container-fluid">
  	<form method="post" action="/newsletter" data-parsley-validate="">
  		{{csrf_field()}}
    <div class="input-group" >
<input type="email" class="form-control" name="email" placeholder="email"></input>
<div class="input-group-btn">
<button type="submit" class="btn btn-default">Subscribe</button>

	</div>

    </div>
</form>

  </div>
  <div class="panel panel-danger error-panel" id="error-panel">{{$errors->newsletter_subscription->first('email')}}</div>

</div>

