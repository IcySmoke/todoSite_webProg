<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo - Login</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<header class="header">
    <h1>Todo Site</h1>
  </header>

	<div class="login">
		<form class="loginForm" action="login.php" method="post">

			<?php include('errors.php'); ?>

			<div class="input-group">
				<input class="username" type="text" name="username" placeholder="username" onfocus="this.placeholder=''" onblur="this.placeholder='username'" required autofocus>
			</div>
			<div class="input-group">
				<input class="password" type="password" name="password" placeholder="password" onfocus="this.placeholder=''" onblur="this.placeholder='password'" required>
			</div>
			<div class="input-group">
				<button class="submit-btn" type="submit" name="login_user">Login</button>
			</div>
		</form>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</div>

</body>
</html>
