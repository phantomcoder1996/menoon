

@extends('layouts.master')

@section('content')
<div class="container-fluid">
{!!Html::style('css/parsley.css')!!}









<div id="feedback" class="w3-container" style="margin-top:10%;text-align:center">

</div>



<!--this is the pop up window-->










<!--here is the feedback modal content-->

@include('pages.feedback')

@include('pages.newsletter')

@include('pages.more_fb')

<script>
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

cardheader=document.createElement("header");
cardheader.className=" w3-light-blue";
cardheader.innerHTML="user name";
cardheader.style="position:relative;top:0;display:flex;height:30px;width:100%;text-align:center;"


cardbody=document.createElement("div");
//cardbody.className="";
cardbody.style="padding:20px;text-align:center;margin-top:10px;";

var feedbackstring=feedback_arr[j].content
  var hiddencontent;
var longt=false;
if(feedbackstring.length > 60) {feedbackstring = feedbackstring.substring(0,60)+"...";
longt=true;
 hiddencontent=document.createElement("INPUT");
hiddencontent.type="hidden";
hiddencontent.id="btn"+j;
hiddencontent.value=feedback_arr[j].content;


cardcontainer.appendChild(hiddencontent);

}
cardbody.innerHTML=feedbackstring;




cardbuttonmore=document.createElement("a");
cardbuttonmore.className="w3-button w3-block w3-dark-grey";
//cardbuttonmore.innerHTML="+ More
cardbuttonmore.style="position:absolute;bottom:0;height:35px;";


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
if(i>=slides.length) slideindex=1;
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

<script>

$(document).ready(function(){if($('#error-panel').text().length==0){$('#error-panel').hide();}else{$('#error-panel').show("slow");}});

</script>
 {!!Html::script('js/parsley.min.js') !!}
</div>

 <section class="no-padding" id="media">
        <div class="container-fluid">

       <ul id="hexGrid">

</ul>
</div>
</section>
 
 
  <!-- Trigger the modal with a button -->
 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-dismiss="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal -->
   <div class="modal1 fade" hidden="true" id="myModal" role="dialog" tabindex="-1">
    <div class="modal1-dialog">
        <div class="modal1-content">
            
                       <div class="modal1-header">Events</div>
                <div class="modal1-body">

 
 
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
         <!-- Indicators -->
          <ol class="carousel-indicators" id="car_ind">

          </ol>  

       <div class="carousel-inner" role="listbox" id="inner_car">

         </div>
   
      </div>

         <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

 
  </div>
  </div>
  </div>
  </div>
<script>
var xmlhttp;
   
    xmlhttp = new XMLHttpRequest();
   // xmlhttp.setRequestHeader("Accept","application/json");
   // console.log(xmlhttp.has('Content-Type'));

 // var xhttp1=new XMLHttpRequest();
   
     xmlhttp.onreadystatechange=function()
     {
        if(this.readyState==4 && this.status==200)
        { 
                  var arr=JSON.parse(this.responseText);

                 // console.log(arr.result.length);
                  // console.log(arr);
                  alert(this.responseText);
                  var count=arr.length;
                  if(count!=0)
                  {
                    for(var i=0;i<count;i++)
                    {
                      if(arr[i].type=='img')
                    {// listelement.setAttribute('id', arr[i].events_id);
                  var listelement=document.createElement("LI");
                     listelement.className += "hex";
                      var div=document.createElement("div");
                      div.className += "hexIn";
                      var image=document.createElement("img");
                      
                      var heading=document.createElement("h1");
                      
                      var parag=document.createElement("p");
                      
                       var e="/storage/"+arr[i].pic.replace("\\","");
                     image.src=e;

                      heading.innerHTML=arr[i].name; //content of  heading
                      parag.innerHTML=arr[i].country;
                      var anchor=document.createElement("a");
                      anchor.className += "hexLink";
                       anchor.setAttribute('id', arr[i].event_id);
                    //  anchor.setAttribute('href',"#");
                      anchor.appendChild(image);
                  anchor.addEventListener("click",displaycarousel);
                      anchor.appendChild(heading);
                      anchor.appendChild(parag);
                      div.appendChild(anchor);
                      listelement.appendChild(div);
                      var ule=document.getElementById("hexGrid");
                      ule.appendChild(listelement);
                      //anchor.onclick = function(){ 
                        
 // };
                    }
                    else {var listelement=document.createElement("LI");
                     // listelement.setAttribute('id', arr[i].id);
                     listelement.className += "hex";
                      var div=document.createElement("div");
                      div.className += "hexIn";
                      var image=document.createElement("iframe");
                      
                      var heading=document.createElement("h1");
                      
                      var parag=document.createElement("p");
                      var divv=document.createElement("div");
                      image.style["width"] = "auto";
                      image.style["height"] = "auto";
                      image.src=arr[i].pic.replace("\\","");
                     
                      

                    //  heading.innerHTML=arr[i].Date; //content of  heading
                    //  parag.innerHTML=arr[i].Name;
                      var anchor=document.createElement("a");
                      anchor.className += "hexLink";
                      anchor.setAttribute('id', arr[i].event_id);
                      anchor.setAttribute('href',"#");
                       divv.appendChild(image);
                      anchor.appendChild(divv);
                  
                      anchor.appendChild(heading);
                      anchor.appendChild(parag);
                      div.appendChild(anchor);
                      listelement.appendChild(div);
                      var ule=document.getElementById("hexGrid");
                      ule.appendChild(listelement);}
                    }
                  }
                  else { var parag=document.createElement("p");parag.innerHTML="nmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmo";
                var ule=document.getElementById("hexGrid");
                      ule.appendChild(parag);};

        }
   };
  
     xmlhttp.open("GET","/media",true);
     xmlhttp.send();





</script>
<!-- <script>
$(document).ready(function(){
  $("#myModal").on("show.bs.modal", function(e) {
      e.preventDefault();
      
      //var id1 = $(e.relatedTarget).data('target-id');
     // var id2 = $(e.relatedTarget).data('target');
      var id3 = e.relatedTarget.id;
      
    //  console.log('Val1=' + id1 + '; Val2=' + id2 + '; Val3=' + id3);
      
      
      $.get('/' + id3, function( data ) {
          alert(data);
          $(".modal-body").html(data);
      });
      
  });
});
</script> -->
<!-- <script>

function displaycarousel()
{
 // $("#myModal").modal("show");
 alert('/media2/'+this.id);

  $.ajax({
        url: '/media2/'+this.id,

        type: 'GET',
              success: function(data) {
               var x=JSON.parse(data);
            
            alert(x);  
            console.log(x);
            //alert(x);       
        },
        error: function(data) {
            //console.log(data.responseText);
           // var obj = jQuery.parseJSON(data.responseText);
          
        }
    });
}


</script> -->
<script>
function displaycarousel()
{





  var xmlhttp;
   
    xmlhttp = new XMLHttpRequest();
   // xmlhttp.setRequestHeader("Accept","application/json");
   // console.log(xmlhttp.has('Content-Type'));

 // var xhttp1=new XMLHttpRequest();

   
     xmlhttp.onreadystatechange=function()
     {
        if(this.readyState==4 && this.status==200)
        { 
                  var arr=JSON.parse(this.responseText);

                 // console.log(arr.result.length);
                  // console.log(arr);

                  var indicator_cont=document.getElementById("car_ind");
var inds="";
var carin="";         if(arr.length>0)
                 { for(var i=0;i<arr.length;i++)
                  {
                     carin+= "<div class='item";  
                     inds+= " <li data-target='#myCarousel' data-slide-to= '"+i;
                    if(i==0)
                    {
                      inds+="' class='active'></li>";
                      carin+=" active'><img src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></div>";
                    }
                    else
                    {
                      inds+="'></li>";
                      carin+="'><img src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></div>";
                    }


                  }
                       $("#car_ind").html(inds);
                       $("#inner_car").html(carin);
                       console.log(carin);
                       console.log(inds);
                        console.log(arr.length);


                  alert(this.responseText);




 $("#myModal").modal("show");

        }
      }
   };
   console.log("/media2/"+this.id);
  var url="/media2/"+this.id;
     xmlhttp.open("GET",url,true);
     xmlhttp.send();
}

</script>

@endsection





@isset($success)
 @if($success==1)
<script>alert("Thanks for your feedback");</script>

@elseif($success==2)

@else
<script>alert("Feedback not successful");</script>
@endif
@endisset

