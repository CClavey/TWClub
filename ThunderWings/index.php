<html>
<head>
	<link rel="stylesheet" href="CSS/loginStyles.css">
	<script src="JS/loginScripts.js"></script>
	<title> ThunderWings-Login </title>
	<?php
		session_start();
		if(isset($_SESSION['emailID']))
			session_destroy();
	?>
</head>

<body>
<center>
<div class = "transparent-box">
<form name="login-form" method="POST" action="loginProcess.php">
	<table>
	<tr>
		<td> Login </td>
	</tr>
	<tr>
		<td><label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></td>
	</tr>
	<tr>
		<td><input type = "password" name = "pwd" id = "pwd" placeholder = "Password" /></td>
	</tr>
	<tr>
		<td><a href = "forgotPassword.html">Forgot Password?</a></td>
	</tr>
	<tr>
		<td><input type="submit" name = "login" id = "login" value = "Login"></td>
	</tr>
	<tr>
		<td>
		<div class="register">
			Don't have an account? <a href="signup.php">Register Now!</a>
		</div>
		</td>
	</tr>
	</table>
	<?php
			if(isset($_GET['login']) && $_GET['loginValue'] == 'fail')
				echo "<center>Email ID or password incorrect, try again</center>";
		?>
</form>
</div>
</center>
</body>
</html>
