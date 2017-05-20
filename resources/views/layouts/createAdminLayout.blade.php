<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('includes.adminHeader')
</head>
<body onload="get_events();">



@yield('content')




<footer>

    @include('includes.adminFooter')

    @yield('scripts')
</footer>
</body>
</html>
<script>

    function show_events()
    {var list=document.getElementById('events_select');
        var selected=list.options[list.selectedIndex].value;
        if(selected=="event_interviewer"||selected=="event_attendance"||selected=="event_creator")
        {
            //get_events();
            $('#current_events').show();
        }
        else {
            // var list=document.getElementById('events_select');
            // list.selectedIndex=0;

            $('#current_events').hide();


        }



    }
    function get_events()
    {
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
                var select=document.getElementById('event_options');
                for(var i=0;i<arr.length;i++)
                {
                    var option=document.createElement('option');
                    option.value=arr[i].id;
                    option.innerHTML=arr[i].name;

                    select.appendChild(option);
                }



            }
        };
        xmlhttp.open("GET", "/eventNames", true);

        xmlhttp.send();
    }

    $(document).ready(function(){if($('#adminAlert').text().length==0){$('#adminAlertDiv').hide();}else{$('#adminAlertDiv').show("slow");}});

  //  var body=document.getElementsByTagName('body')[0];
    //body.addEventListener("load",get_events,false);
//

</script>