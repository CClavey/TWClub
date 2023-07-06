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
		$pwd = $_POST['pwd'];
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$role = "U";

		$sql = "INSERT INTO users_tab (sID, firstName, lastName, emailID, password, gender, dob, role) 
				VALUES (null, '$firstname', '$lastname', '$emailID', '$pwd', '$gender', '$dob', '$role')";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			?>
			<script>
				alert("Account Created!");
				window.location.href = "index.php";
			</script>
			<?php
			$_SESSION['emailID'] = $emailID;
		}
	?>

</center>
</body>
</html>