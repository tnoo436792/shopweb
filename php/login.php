<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
	<div class="login">
		<h1>Login</h1>
		<form method="post" action="login.php">
			<input type="text" name="username" placeholder="Username" required="required" />
			<input type="password" name="password" placeholder="Password" required="required" />
			<button type="submit" name="login" class="btn btn-primary btn-block btn-large">Login</button>
		</form>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>

	</form>

</div>
</body>
</html>
