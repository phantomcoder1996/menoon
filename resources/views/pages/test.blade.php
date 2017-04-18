

@extends('layouts.master')

@section('stylesheet')
{!!Html::style('css/parsley.css')!!}


@endsection


@section('content')



<div id="feedback" class="w3-container" style="margin-top:10%;text-align:center">

</div>



<!--this is the pop up window-->

<div id="popup1" class="overlay">
  <div class="popup">
    <h2>Feedback</h2>
    <a class="close" href="#">&times;</a>
    <div class="content" id="fbcontent">

    </div>
  </div>
</div>









<!--here is the feedback modal content-->
@include('pages.feedback')

<script>
function DisplayFeedback(feedback_arr)
{
var fb_container=document.getElementById("feedback");
var cnt=min(15,feedback_arr.length);
for(var i=0;i<cnt/5;i++)
{
  //creating a certain slide
  oneslide=document.createElement("div");
  oneslide.className="feedbackslides w3_container";
  oneslide.style="margin:auto";
  for(var j=i*5;j<min(cnt,(i*5)+5);j++)
  {
    
var cardcontainer=document.createElement("div");
//div1.innerHTML=feedback_arr[j].content;
cardcontainer.className="feedback_card";

cardheader=document.createElement("header");
cardheader.className=" w3-light-blue";
cardheader.innerHTML="user name";
cardheader.style="position:relative;top:0;display:flex;height:30px;width:100%;text-align:center;"


cardbody=document.createElement("div");
//cardbody.className="";
cardbody.style="padding:20px;text-align:center;margin-top:10px;";

var feedbackstring=feedback_arr[j].content
var longt=false;

if(feedbackstring.length > 60) {feedbackstring = feedbackstring.substring(0,60)+"...";

  longt=true;
}
cardbody.innerHTML=feedbackstring;

var hiddencontent=document.createElement("input");
hiddencontent.type="hidden";
hiddencontent.value=feedback_arr[j].content;
hiddencontent.id="btn"+j;



cardbuttonmore=document.createElement("button");
cardbuttonmore.className="w3-button w3-block w3-dark-grey";
//cardbuttonmore.innerHTML="+ More
cardbuttonmore.style="position:absolute;bottom:0;height:35px;";

if(longt)
  {cardbuttonmore.innerHTML="+ More";
cardbuttonmore.href="#popup1";
cardbuttonmore.addEventListener("click",function(){var i=hiddencontent.id; displayfb(i);});

}

cardcontainer.appendChild(cardheader);
cardcontainer.appendChild(cardbody);
cardcontainer.appendChild(cardbuttonmore);







oneslide.appendChild(cardcontainer);
}

fb_container.appendChild(oneslide);
}

function min(a,b)
{
	if(a<b) return a;
	else return b;
}



}

function displayfb(id)
{
var text=document.getElementById(id).value;
alert(text);
var popup=document.getElementById("fbcontent");
popup.innerHTML=text;

}


</script>
<script>
var slideindex=1;
function createbuttons()
{
var right=document.createElement("button");
right.className="w3-button w3-display-right";
right.addEventListener("click",slideright);
right.innerHTML="&#10095";

//right.onclick=slide(1);
var left=document.createElement("button");
left.className="w3-button w3-display-left";
left.innerHTML="&#10094";
left.addEventListener("click",slideleft);
//left.onclick=alert("hi");

var cont=document.getElementById("feedback");


cont.appendChild(right);

cont.appendChild(left);


}

function slideright()
{
slideindex+=1;
showSlide(slideindex);


}
function slideleft()
{
slideindex-=1;
showSlide(slideindex);


}



</script>

<script>

// this script is responsible for showing one slide and hiding the rest 



function showSlide(i)
{

var slides=document.getElementsByClassName("feedbackslides");
if(i==slides.length) slideindex=1;
if(i==0) slideindex=slides.length;

for(var j=0;j<slides.length;j++)
{
  slides[j].style.display="none";

}

slides[slideindex-1].style.display="block";


}



</script>

<script>

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
          
          DisplayFeedback(arr);
          showSlide(1);
          createbuttons();
          

    }
  };
  xmlhttp.open("GET", "/feedback", true);

  xmlhttp.send();

 
</script>


@endsection


@section('script')

{!!Html::script('js/parsley.min.js') !!}





@endsection


@isset($success)
 @if($success==1)
<script>alert("Thanks for your feedback");</script>

@elseif($success==2)

@else
<script>alert("Feedback not successful");</script>
@endif
@endisset


