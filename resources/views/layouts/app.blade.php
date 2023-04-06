<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

 
        <footer>
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h3>Contacto</h3>
            <p>Correo electrónico: contacto@tudominio.com</p>
            <p>Teléfono: 1234567890</p>
         </div>
         <div class="col-md-6">
            <h3>Síguenos en redes sociales</h3>
            <ul class="social-media">
               <li><a href="#"><i class="fab fa-facebook"></i></a></li>
               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>

    </body>
</html>