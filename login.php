<div class="login">
  <form class="loginForm" action="index.php" method="post">
    <input class="username" type="text" name="username" placeholder="username" onfocus="this.placeholder=''" onblur="this.placeholder='username'" required autofocus>
    <input class="password" type="password" name="password" placeholder="password" onfocus="this.placeholder=''" onblur="this.placeholder='password'" required>
    <button class="submit-btn" type="submit" name="login-btn">Login</button>
  </form>
  <a href="index.php?page=register">
    <button class="submit-btn" type="submit" name="register-route-btn">Register</button>
  </a>
</div>
