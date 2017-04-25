@extends("layouts.home")
@section("contact")
<div id="container" class="form">
<br><br>
<h1 >Get In Touch </h1>
<form action="{{url("contact")}}" method="POST">
  {{csrf_field()}}
    <input type="name" name="name" placeholder="Name" required="required">
	<input type="email" name="email" placeholder="E-mail" required="required" >
    <textarea  name="message" placeholder="Message" required="required" rows="9" cols="25" style="margin-right:20px;"></textarea>
   
    <input type="submit" name="submit" value="Submit" class="btn "  >
	
</form>
</div>
@endsection