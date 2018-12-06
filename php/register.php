<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="register">
		<h1>Register</h1>

	<form method="post" action="register.php">

		<!-- display validation errors here -->
		<?php  include('errors.php'); ?>
		<input type="text" name="username" placeholder="Username" required="required" />
		<input type="text" name="email" placeholder="Email" required="required" />
		<input type="password" name="password_1" placeholder="Password" required="required" />
		<input type="password" name="password_2" placeholder="Confirm Password" required="required" />


		<button type="submit" name="register" class="btn btn-primary btn-block btn-large">Register</button>
</form>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	
</div>
</body>
</html>