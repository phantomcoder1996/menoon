

function DisplayFeedback(feedback_arr)
{
var fb_container=document.getElementById("feedback");
var cnt=min(15,feedback_arr.length);
var cnt2;
if(cnt<5) cnt2=1; else cnt2=cnt/5;
for(var i=0;i<cnt2;i++)
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

cardheader=document.createElement("div");
cardheader.className=" w3-light-blue";
cardheader.className+=" feedback_header";
cardheader.innerHTML=feedback_arr[j].username;
//cardheader.style="position:relative;top:0;display:flex;height:30px;width:100%;text-align:center;"
//

cardbody=document.createElement("div");
cardbody.className="feedback_body";
//cardbody.style="padding:10px;text-align:center;margin-top:5px;";
//cardbody.style.visibility="hidden";

var feedbackstring=feedback_arr[j].content
  var hiddencontent;
var longt=false;

if(feedbackstring.length > 40) {feedbackstring = feedbackstring.substring(0,40)+"...";

longt=true;
 hiddencontent=document.createElement("INPUT");
hiddencontent.type="hidden";
hiddencontent.id="btn"+j;
//hiddencontent.id=feedback_arr[j].id;
hiddencontent.value=feedback_arr[j].content;


cardcontainer.appendChild(hiddencontent);

}
//var x=document.createElement("div");
cardbody.innerHTML=feedbackstring;
//cardbody.appendChild(x);
//cardbody.innerHTML=feedbackstring;




cardbuttonmore=document.createElement("a");
cardbuttonmore.className="w3-button w3-block w3-dark-grey feedback_footer";
//cardbuttonmore.className="";
//cardbuttonmore.innerHTML="+ More
//cardbuttonmore.style="position:absolute;bottom:0;height:35px;";


if(longt)
  {cardbuttonmore.innerHTML="+ More";
var modalid="#more_fb_modal";
cardbuttonmore.id="b"+hiddencontent.id;
cardbuttonmore.addEventListener("click",displayfb);

//init_fb_modal(cardbuttonmore.id,modalid);
  


}

cardcontainer.appendChild(cardheader);
cardcontainer.appendChild(cardbody);
cardcontainer.appendChild(cardbuttonmore);







oneslide.appendChild(cardcontainer);
}

fb_container.appendChild(oneslide);
}





}
function min(a,b)
{
  if(a<b) return a;
  else return b;
}

function max(a,b)
{
    if(a>b) return a;
  else return b;
}

function displayfb()
{
  id=this.id;

  id=id.substring(1);

var text=document.getElementById(id).value;

var popup=document.getElementById("more_fb_content");
popup.innerHTML=text;

$("#more_fb_modal").modal("show");

//init_fb_modal(this.id,"#more_fb_modal");

}


var slideindex=1;
function createbuttons()
{
var right=document.createElement("button");
right.className="w3-button right_fb_slider";
right.addEventListener("click",slideright);
right.innerHTML="&#10095";

//right.onclick=slide(1);
var left=document.createElement("button");
left.className="w3-button left_fb_slider";
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





// this script is responsible for showing one slide and hiding the rest 



function showSlide(i)
{

var slides=document.getElementsByClassName("feedbackslides");
if(i>=slides.length) slideindex=1;
if(i==0) slideindex=slides.length;

for(var j=0;j<slides.length;j++)
{
  slides[j].style.display="none";

}

slides[slideindex-1].style.display="block";


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
          
          DisplayFeedback(arr);
          showSlide(1);
          createbuttons();
          console.log(arr);

    }
  };
  xmlhttp.open("GET", "/feedback", true);

  xmlhttp.send();

 


$(document).ready(function(){if($('#error-panel').text().length==0){$('#error-panel').hide();}else{$('#error-panel').show("slow");}});

