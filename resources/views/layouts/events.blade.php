<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
@include("includes.EventHead")
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

@yield("eventContent")
@yield("courses")
@yield('eventScripts')
</body>
</html>
