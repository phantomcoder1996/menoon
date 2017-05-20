
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
                   
                
                   console.log(arr);                  
                  //var count=arr.length;
                 var count= Object.keys(arr).length;
                  console.log(Object.keys(arr).length);
                  if(count!=0)
                  {
                    $.each(arr, function(key, obj) 
                    { if(obj.type=="img")
                    {// listelement.setAttribute('id', arr[i].events_id);
                  var listelement=document.createElement("li");
                     listelement.className += "hex";
                      var div=document.createElement("div");
                      div.className += "hexIn";
                      var image=document.createElement("img");
                      
                      var heading=document.createElement("h1");
                      
                      var parag=document.createElement("p");
                      
                       var e="/storage/"+obj.pic.replace("\\","");
                     image.src=e;
                       // console.log(i);
                      
                      heading.innerHTML=obj.name; //content of  heading
                      parag.innerHTML=obj.country;
                      var anchor=document.createElement("a");
                      anchor.className += "hexLink";
                       anchor.setAttribute('id', obj.event_id);
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
                    else
                     {var listelement=document.createElement("li");
                     // listelement.setAttribute('id', arr[i].id);
                     listelement.className += "hex";
                      var div=document.createElement("div");
                      div.className += "hexIn";
                      var image=document.createElement("video");
                      
                      var heading=document.createElement("h1");
                      
                      var parag=document.createElement("p");
                      var divv=document.createElement("div");
                      //align="right"
                      $(divv).attr('align', 'right');
                      var e="/storage/"+obj.pic.replace("\\","");
                      image.src=e;
                     
                      

                    //  heading.innerHTML=arr[i].Date; //content of  heading
                    //  parag.innerHTML=arr[i].Name;
                      var anchor=document.createElement("a");
                      anchor.className += "hexLink";
                      anchor.setAttribute('id', obj.event_id);
                      anchor.setAttribute('href',"#");
                      anchor.addEventListener("click",displaycarousel);
                       heading.innerHTML=obj.name; //content of  heading
                      parag.innerHTML=obj.country;
                       divv.appendChild(image);
                      anchor.appendChild(divv);
                       // console.log(i);
                      anchor.appendChild(heading);
                      anchor.appendChild(parag);
                      div.appendChild(anchor);
                      listelement.appendChild(div);
                      var ule=document.getElementById("hexGrid");
                      ule.appendChild(listelement);}
                    });
                  }
                  else { var parag=document.createElement("p");parag.innerHTML="no";
                var ule=document.getElementById("hexGrid");
                      ule.appendChild(parag);};

        }
   };
  
     xmlhttp.open("GET","/media",true);
     xmlhttp.send();























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

                    
                   //         <div class="carousel-caption">
          //<h3>New York</h3>
          //<p>We love the Big Apple!</p>
        //</div>

                 // console.log(arr.result.length);
                   console.log(arr);

                  var indicator_cont=document.getElementById("car_ind");
var inds="";
var carin="";         if(Object.keys(arr).length>0)
                 { for(var i=0;i<Object.keys(arr).length;i++)
                  {    var ule=document.getElementById("hello1");
                       ule.innerHTML=arr[i].name+" Event in "+arr[i].country;

                      // var deis=document.getElementById("des");
                       //deis.innerHTML=arr[i].description;
                     carin+= "<div class='item";  
                     inds+= " <li data-target='#myCarousel' data-slide-to= '"+i;
                    if(i==0)
                    {

                      if(arr[i].type=='img')
                   {  inds+="' class='active'></li>";
                      carin+=" active'><img src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></div>";
                    }
                    else 
                    {// <video    >
          //<source src="movie.mp4" type="video/mp4">
         
                            
          //</video>
                      inds+="' class='active'></li>";
                      carin+=" active'> <video  controls><source src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></video></div>";
                    }


                       // var h=document.getElementById("attatch");
                       // var button=document.createElement("button");
                       // button.setAttribute('id',arr[i].id);
                       // button.className+="btn btn-default";
                      //  button.addEventListener("click",displaycarousel);
                      
                       // var span=document.createElement("span");
                       // span.className+="glyphicon glyphicon-tag";
                       // $(span).attr("aria-hidden","true");
                       // button.appendChild(span);
                       //  h.appendChild(button);
                       // alert(arr[i].id);
                        //alert('k');
                    }

                    else
                    {if(arr[i].type=='img')
                     { inds+="'></li>";
                      carin+="'><img src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></div>";
                    }
                    else 
                    {
                      inds+="'></li>";
                      carin+="'><<video controls>< source src='";
                      carin+='/storage/'+arr[i].pic;
                      carin+="'></video></div>";
                    }

                     //  var h=document.getElementById("attatch");
                     //   var button=document.createElement("button");
                     //   button.setAttribute('id',arr[i].id);
                     // //  alert(arr[i].id);
                     //   button.className+="btn btn-default";
                     //  //  button.addEventListener("click",displaycarousel);
                      
                     //   var span=document.createElement("span");
                     //   span.className+="glyphicon glyphicon-tag";
                     //   $(span).attr("aria-hidden","true");
                     //   button.appendChild(span);
                     //    h.appendChild(button);
                    }


                  }
                       $("#car_ind").html(inds);
                       $("#inner_car").html(carin);
                       console.log(carin);
                       console.log(inds);
                        console.log(arr.length);







 $("#myModal").modal("show");

        }
      }
   };
   console.log("/media2/"+this.id);
  var url="/media2/"+this.id;
     xmlhttp.open("GET",url,true);
     xmlhttp.send();
}
