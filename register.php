<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo - Register</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<header class="header">
    <h1>Todo Site</h1>
  </header>

	<div class="register">
		<form class="registerForm" action="register.php" method="post">

			<?php include('errors.php'); ?>

			<div class="input-group">
				<input class="username" type="text" name="username" value="<?php echo $username; ?>" placeholder="username" onfocus="this.placeholder=''" onblur="this.placeholder='username'" required autofocus>
			</div>
			<div class="input-group">
			<input class="email" type="email" name="email" value="<?php echo $email; ?>" placeholder="e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='e-mail'" required>
			</div>
			<div class="input-group">
				<input class="password" type="password" name="password_1" placeholder="password" onfocus="this.placeholder=''" onblur="this.placeholder='password'" required>
			</div>
			<div class="input-group">
				<input class="password" type="password" name="password_2" placeholder="confirm" onfocus="this.placeholder=''" onblur="this.placeholder='confirm'" required>
			</div>
			<div class="input-group">
			<button class="submit-btn" type="submit" name="reg_user">Register</button>
			</div>
		</form>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</div>

</body>
</html>
