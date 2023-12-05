<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Uosugata</title>

    <!-- Fonts -->
    <link rel="icon" href="/assets/images/logoprincipal.jpeg">
    <script src="https://kit.fontawesome.com/77693d89c5.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite([
        'resources/css/galeriaSpirit.css',
        'resources/css/bootstrap.css',

    ])

</head>

@yield('content')

 <!--- FOOTER -->
 <footer>
    <div class="footer-content">
      <h3> --- Uosugata ---</h3>
      <p> [ Espiritu Fueguino ]</p>
      <p>Indumentaria Masculina -
        Colecciones Exclusivas -
        Envíos a todo el país</p>
      <ul class="socials">
        <li><a href="mailto:uosugata@gmail.com" target="_blank"><i class="fa-regular fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/uosugata/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/Uosugata" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.google.com/webhp?hl=es&sa=X&ved=0ahUKEwi9m8yWlrT7AhU6qZUCHa0aCSYQPAgI" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Copyrigth &copy;2022 Uosugata</p>
    </div>
  </footer>

   <!-- Scripts -->
   @vite([
    'resources/js/bootstrap.js',
    

    ])


      
</body>
</html>

