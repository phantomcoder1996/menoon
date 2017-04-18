<!DOCTYPE html>
<html lang="en">
  <head>
@include('includes.head')

@yield('stylesheet')
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

@yield('script')  
    
  </body>
</html>