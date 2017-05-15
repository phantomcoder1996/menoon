@extends('layouts.adminLayout')

@section('content')

<div id='currentUsers'>
<table class="userTable table" ><thead class="userTableHead "><tr><th>Firstname</th><th>Lastname</th><th>Username</th><th>Fingerprint</th></tr></thead><tbody id="usersTable"></tbody></table>



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