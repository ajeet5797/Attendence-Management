<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class ="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="Login.php">
		<div class="input-group">
			<labal>Username</labal>
			<input type="text" name="Username">
		</div>
		<div class="input-group">
			<labal>Password</labal>
			<input type="text" name="Password1">
		</div>
		<div class="input-group">
			<labal>Cnfirm Password</labal>
			<input type="text" name="Password2">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p> Not yet a member? <a href="first.php">Sign up</a></p>
	</form>
	</body>
	</html>
	