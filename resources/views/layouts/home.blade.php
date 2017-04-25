<!DOCTYPE html>
<html lang="en">
<head>
    @include("includes.homeHead")
</head>
<header>
    @include("includes.header")
</header>
<body  id="page-top">




<div id="About">@yield("about")</div>
<div id="newsletter">@yield("subscribe")</div>
<div id="Media">@yield("media")<br></div>
<div id="feedback">@yield("feedback")</div>

<div id="Contact">@yield("contact")</div>



<!-- jQuery -->
{!! Html::script( "vendor/jquery/jquery.min.js")!!}
<!-- Bootstrap Core JavaScript -->
<script src=""></script>

{!! Html::script( "vendor/bootstrap/js/bootstrap.min.js")!!}
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


{!! Html::script( "vendor/scrollreveal/scrollreveal.min.js")!!}
<script src=""></script>

{!! Html::script( "vendor/magnific-popup/jquery.magnific-popup.min.js")!!}
<!-- Theme JavaScript -->


{!! Html::script( "js/creative.min.js")!!}

{!! Html::script( "js/modals.js")!!}

{!!Html::script('js/media.js') !!}

{!!Html::script('js/home.js') !!}
{!!Html::script('js/parsley.min.js') !!}
</body>
</html>