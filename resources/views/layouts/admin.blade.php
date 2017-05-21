<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.adminHeader')
    @yield("navbar")
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color:white">
<br><br><br><br>
@yield("viewEvents")
</body>
</html>
