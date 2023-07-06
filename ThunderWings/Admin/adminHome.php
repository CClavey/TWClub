<html>
<head>
	<?php 
		session_start();
		if(!isset($_SESSION['emailID']) || (isset($_SESSION['userRole']) && $_SESSION['userRole'] != 'A'))
		?>
		<center>
		<br><br><br><br>
			<?php echo "BAD Page. <a href='../index.php'>Login</a> again."; ?>
		</center>
	<title>ThunderWings-Admin</title>
</head>

<body>

</body>
</html>