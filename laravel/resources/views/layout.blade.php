<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <style>
      .activo a{
        color:red;
        text-decoration:underline;
      }
    </style>
  
  </head>
  

  <body> 
    <nav> 
      <!-- {{ dump(request()->routeIs('home')) }} -->
      <table class="table"> 
        @include('partials.nav')
      </table>
      @include('partials.sesion-estado')

      @yield('content')
    </nav> 
    
    <!-- <nav> 
        <ul> 
            <li><a href="/">Home</a></1i> 
            <li><a href="nosotros">Nosotros</a></1li> 
            <li><a href="servicios">Servicios</a></li> 
            <li><a href="contacto">Contacto</a></1li> 
        </ul> 
    </nav>  -->
    
    
</body>
  
</html>




