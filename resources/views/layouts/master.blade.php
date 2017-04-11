<!DOCTYPE html>
<html lang="en">
  <head>
@include('includes.head')

  </head>
  <body>

<header>
  @include('includes.header')

</header>

<div class="container-fluid">

@yield('content')

</div>

    
 <footer class="footer">
    @include('includes.footer')
  </footer>

  
    
  </body>
</html>