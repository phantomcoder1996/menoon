      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin view</title>

     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   {!! Html::style( "assets/css/font-awesome.css")!!}
   {!! Html::style( "assets/css/custom.css")!!}
      {!! Html::style( "css/menoon.css")!!}
<script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">

 
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Custom Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{!! Html::style( "vendor/font-awesome/css/font-awesome.min.css")!!}

<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>

<!-- Theme CSS -->

{!! Html::style( "css/events.min.css")!!}
<!-- Bootstrap Core CSS -->

{!! Html::style( "vendor/bootstrap/css/bootstrap.min.css")!!}
{!!Html::style('css/w3.css')!!}

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" >
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<!-- jQuery -->
{!! Html::script("vendor/jquery/jquery.min.js")!!}


<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

{!! Html::style( "css/viewEvents.css")!!}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
{!! Html::style( "vendor/magnific-popup/magnific-popup.css")!!}
<!-- Theme CSS -->
{!! Html::style( "css/home.css")!!}
<style>
.squaredFour {
  width: 20px;
  position: relative;
  margin: 20px auto;
  label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: #fcfff4;
    background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
    border-radius: 4px;
    box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #333;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.5;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }
  }    
}

.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 30px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 30px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

.imgButton{
    text-align:center;
}

.content-panel{
  overflow: auto; /* keep the float contained within this panel */
  border: 1px dotted blue;
}
.thumb-panel {
  float: left;
  width: 100px;
  border: 1px solid gray;
  text-align: center;
  margin-right: 20px; /* for example */
}
.thumb-panel img {
  display: inline-block;
  margin-bottom: 20px; /* for example */
}
.thumb-panel button{
  display: inline-block;
  margin-bottom: 20px;
}

.carousel {
      min-width: 650px;
      min-height: 500px;
             }
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
             width:600px;
             height:460px;
             margin: auto;
             margin-top: 20px;
          
          }

  header {
     min-height: auto;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     background-size: cover;
     -o-background-size: cover;
     background-position: center;
        
 }

 .tags {
  list-style: none;
  margin: 0;
  overflow: hidden; 
  padding: 0;
}

.tags li {
  float: left; 
}

.tag {
  background: #eee;
  background-color:#581845;
  border-radius: 3px 0 0 3px;
  
  color: #999;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0 10px 10px 0;
  text-decoration: none;
  -webkit-transition: color 0.2s;
}

.tag::before {
  background: #fff;
  border-radius: 10px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
  content: '';
  height: 6px;
  left: 10px;
  position: absolute;
  width: 6px;
  top: 10px;
}

.tag::after {
  background: #fff;
  border-bottom: 13px solid transparent;
  border-left: 10px solid #581845;
  border-top: 13px solid transparent;
  content: '';
  position: absolute;
  right: 0;
  top: 0;
}

.tag:hover {
  background-color: crimson;
  color: white;
}

.tag:hover::after {
   border-left-color: crimson; 
}
  </style>
   <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
      <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
      

 
       