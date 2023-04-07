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
            <p>Correo electrónico: contacto@picapital.mx</p>
         </div>
      </div>
   </div>
</footer>

    </body>
</html>