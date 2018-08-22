<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	<div class ="header">
		<h2>Student Registration</h2>
	</div>
	<form method="post" action="SudentReg.php">

		<div class="input-group">
			<labal>Student Id</labal>
			<input type="text" name="Student Id">
		</div>
		<div class="input-group">
			<labal>Father's name</labal>
			<input type="text" name="Father's name">
		</div>
		<div class="input-group">
			<labal>Mother's name</labal>
			<input type="text" name="Mother's name">
		</div>
		<div class="input-group">
			<labal> Gender</labal>
			<input type="text" name="Gender">
		</div>
		<div class="input-group">
			<labal>Email</labal>
			<input type="text" name="Email">
		</div>
		<div class="input-group">
			
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p> Alredy a member?  <a href="studentLogin.php">Sign in</a></p>
	</form>
	</body>
	</html>
	