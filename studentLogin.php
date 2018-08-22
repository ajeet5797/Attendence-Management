<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class ="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="studentLogin.php">
		<div class="input-group">
			<labal>Student id</labal>
			<input type="text" name="Student id">
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
		<p> Not yet a member? <a href="SudentReg.php">Sign up</a></p>
	</form>
	</body>
	</html>
	