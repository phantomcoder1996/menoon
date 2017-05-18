<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
@include("includes.EventHead")
</head>
<header>
    @include("includes.eventHeader")
</header>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


@yield("courses")
@yield('eventScripts')




</body>
</html>
