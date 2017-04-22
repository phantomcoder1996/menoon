  
@extends('layouts.master')




@section('event')
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
            <div class="panel panel-filled">
                <div class="panel-body">
                       <div class="modal1-header">Events</div>
                <div class="modal1-body">

 
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
         <!-- Indicators -->
          <ol class="carousel-indicators" id="car_ind">

    </ol>  

       <div class="carousel-inner" role="listbox" id="inner_car">

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
                     // var f=arr[i].pic.replace("\\","");
                      //console.log(f);
                      //var y=e.concat(f);
                     image.src=e;
                     
                      //heading.innerHTML=arr[i].Date; //content of  heading
                     // parag.innerHTML=arr[i].Name;
                      var anchor=document.createElement("a");
                      anchor.className += "hexLink";
                       anchor.setAttribute('id', arr[i].events_id);
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
                     inds+= " <li data-target='#myCarousel' data-slide-to="+i;
                    if(i==0)
                    {
                      inds+=" class=' active'></li>";
                      carin+="active'><img src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></div>";
                    }
                    else
                    {
                      inds+="></li>";
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

