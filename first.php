
<?php include ('server.php'); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class ="header">
		<h2>Faculty Registration</h2>
	</div>
	<form method="post" action="first.php">
		<!--display validation error here-->
		<? php  include('errors.php'); ?>
		<div class="input-group">
			<labal> Id</labal>
			<input type="text" name="Id" required>
		</div>
		<div class="input-group">
			<labal>Password</labal>
			<input type="text" name="Password" required>
		</div>
		<div class="input-group">
			<labal> Mobile No</labal>
			<input type="text" name="Mobileno" required>
		</div>
		<div class="input-group">
			<labal> Gender</labal>
			<input type="text" name="gender" required>
		</div>
		<div class="input-group">
			<labal>Email</labal>
			<input type="text" name="Email" required>
		</div>
		<div class="input-group">
			
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p> Alredy a member?  <a href="login.php">Sign in</a></p>
	</form>
	</body>
	</html>
	