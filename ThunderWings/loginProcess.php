<html>
<header>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
<center>
	<?php
		session_start();
		include("db-connection.php");

		$emailID = $_POST['emailID'];
		$password = $_POST['pwd'];

		$sql = "SELECT * FROM users_tab WHERE emailID = '".$emailID."'";
		$result = $connect->query($sql);
		$row = $result->fetch_assoc();

		if($password == $row['password']) {
			if($row['role'] == 'A') {
				$_SESSION['userRole'] = 'A';
				header('Location: Admin/adminHome.php');
			} else
				header('Location: User/userHome.php');
			$_SESSION['emailID'] = $emailID;
		} 
		else {
			header("Location: index.php?loginValue=fail");
			exit();
		}
	?>

</center>
</body>
</html>