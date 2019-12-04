<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Todo</title>
  </head>
  <header class="header">
    <h1>Todo Site</h1>
  </header>
  <body>
    <div class="login">
      <form class="loginForm" action="index.php" method="post">
        <i class="usename-icon"></i>
        <input class="username" type="text" name="username" placeholder="username" onfocus="this.placeholder=''" onblur="this.placeholder='username'" required autofocus>
        <input class="password" type="password" name="password" placeholder="password" onfocus="this.placeholder=''" onblur="this.placeholder='password'" required>
        <button class="login-btn" type="submit" name="login">Login</button>
      </form>
      <button type="button" name="button">register</button>
    </div>
  </body>
</html>
