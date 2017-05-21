@extends('layouts.adminLayout')

@section('content')


    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: #021637;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{route('tagAdmin.view')}}">MeNooN LLC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guard('web_admins')->guest())
                        <li ><a href="#" data-toggle="modal" data-target="#loginModal" ><span class="glyphicon glyphicon-user"></span> Log In</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#registerModal" ><span class="glyphicon glyphicon-log-in"></span> Sign Up &nbsp&nbsp&nbsp</a></li>
                    @else
                        <li>
                            <a style="color:white;" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>


                    @endif


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div id='currentUsers'>
<table class="userTable table" style="margin-top:10%;"><thead class="userTableHead "><tr><th>Firstname</th><th>Lastname</th><th>Username</th><th>Fingerprint</th></tr></thead><tbody id="usersTable"></tbody></table>



</div>


<div class="alert1" id="adminAlertDiv">
  <span class="closebtn1" onclick="this.parentElement.style.display='none';">&times;</span> 
  <p  id="adminAlert">{{$errors->fingerprints->first('fingerprint')}}</p>
</div>

@endsection


@section('scripts')

<script>

function createForm(arr)
{
     var cu=document.getElementById("usersTable"); 
     var tablerow=document.createElement('tr');

     var firstname=document.createElement("td");
     firstname.innerHTML=arr.fname;

     var lastname=document.createElement("td");
     lastname.innerHTML=arr.lname;

     var username=document.createElement("td");
     username.innerHTML=arr.username;

     cu.appendChild(tablerow);
     tablerow.appendChild(firstname);
     tablerow.appendChild(lastname);
     tablerow.appendChild(username);


    var user_form=document.createElement("form");
    user_form.action="/fingerprints";
    user_form.method="Post";

    var input_field=document.createElement("input");
    input_field.type="File";
    input_field.name="fingerprint";

    
    var user_id=document.createElement("input");
    user_id.type="hidden";
    user_id.value=arr.id;
    user_id.name='userid';

    var input_token=document.createElement("input");
    input_token.type="hidden";
    input_token.name="_token";
    input_token.value="{{ csrf_token() }}";

    var button=document.createElement("button");
    button.type="submit";
    button.innerHTML="upload";
    button.className="btn btn-default";

    user_form.appendChild(input_field);
    user_form.appendChild(input_token);
    user_form.appendChild(user_id);
    user_form.appendChild(button);

     user_form.className="panel";
       tablerow.appendChild(user_form);


}

  var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    var arr=JSON.parse(this.responseText);
console.log(arr);
for(var i=0;i<arr.length;i++)
{
     createForm(arr[i]);



  
}
     $( "form" )
         .attr( "enctype", "multipart/form-data" )
         .attr( "encoding", "multipart/form-data" );

    }
  };
  xmlhttp.open("GET", "/fingerprints", true);

  xmlhttp.send();


$(document).ready(function(){if($('#adminAlert').text().length==0){$('#adminAlertDiv').hide();}else{$('#adminAlertDiv').show("slow");}});




</script>


@endsection