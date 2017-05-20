<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/w3.css')!!}

    {!!Html::style("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css")!!}
    {{--{!! Html::script("//code.jquery.com/jquery-1.10.2.js")!!}--}}
    {{--<!-- Plugin JavaScript -->--}}
    {!! Html::script("vendor/jquery/jquery.js")!!}
    {!! Html::script("vendor/scrollreveal/scrollreveal.min.js")!!}
    {!! Html::script("vendor/magnific-popup/jquery.magnific-popup.min.js")!!}
    {{--{!! Html::script("//code.jquery.com/ui/1.11.2/jquery-ui.js")!!}--}}
    {!! Html::script("vendor/bootstrap/js/bootstrap.min.js")!!}

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color:white">
<br><br><br><br>
@yield('content')
</body>
</html>