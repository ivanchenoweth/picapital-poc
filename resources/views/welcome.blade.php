<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
    </head>

    
    <body class="antialiased">
    <form method="POST" action="{{ route('login.custom') }}">
         @csrf
        <div class="imgcontainer">
            <img src="logo-picapital.png" alt="Avatar" class="avatar">
        </div>

        <div class="txt_field">
          <input type="text" name="email" id="email" required>
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="password" name="password" id="password" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">


    </form>
            
    </body>
</html>
