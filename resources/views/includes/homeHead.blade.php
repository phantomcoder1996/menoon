
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>MeNoon LLC</title>
<!-- Bootstrap Core CSS -->
{!! Html::style( "vendor/bootstrap/css/bootstrap.min.css")!!}
<!-- Custom Fonts -->
{!! Html::style( "vendor/font-awesome/css/font-awesome.min.css")!!}
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
{!!Html::style('css/w3.css')!!}
{!!Html::style('css/menoon.css')!!}
<!-- Plugin CSS -->
{!! Html::style( "vendor/magnific-popup/magnific-popup.css")!!}
<!-- Theme CSS -->
{!! Html::style( "css/home.css")!!}

<!-- contact -->
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
{!! Html::style( "css/Contact.css")!!}


{!!Html::style('css/parsley.css')!!}

<!-- Fonts -->

<link rel="stylesheet" href="{{ URL::to('css/hexagon.css') }}">

<link rel="stylesheet" href="{{ URL::to('css/modal.css') }}">


{!!Html::style('css/parsley.css')!!}

<!-- Styles -->
<style>
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



