    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>MeNoon LLC</title>
    <!-- Bootstrap core CSS -->
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/w3.css')!!}
    {!!Html::style('css/menoon.css')!!}
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}">



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
      

        <!-- Fonts -->
        
      <link rel="stylesheet" href="{{ URL::to('css/hexagon.css') }}">
      
    <link rel="stylesheet" href="{{ URL::to('css/modal.css') }}">
     
    
    

   



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
       