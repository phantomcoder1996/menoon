<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include("includes.profile")
    @include("includes.profileHeader")
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<br><br>

@yield ("createEvent")
</body>
</html>
