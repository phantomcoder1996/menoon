
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


                




 $("#myModal").modal("show");

        }
      }
   };
   console.log("/media2/"+this.id);
  var url="/media2/"+this.id;
     xmlhttp.open("GET",url,true);
     xmlhttp.send();
}
