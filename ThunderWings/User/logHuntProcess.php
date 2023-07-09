<html>
<head>
<?php include ("../db-connection.php") ?>
<?php include ("userHeader.php") ?>
<link rel="stylesheet" href="userCSS/userStyles.css">
<script src="userJS/userScripts.js"></script>
</head>

<body>
<center>
	<?php
		$emailID = $_SESSION['emailID'];
		$sql = "SELECT * FROM users_tab WHERE emailID = '$emailID'";
		$result = $connect->query($sql);
		$row = $result->fetch_assoc();
		
		$firstName = $row['firstName'];
		$lastName = $row['lastName'];
		$huntDate = $_POST['huntDate'];
		$sectionHunted = $_POST['sectionHunted'];
		$waterLevel = $_POST['waterLevel'];
		$temp = $_POST['temp'];
		$weather = $_POST['weather'];
		$windDirection = $_POST['windDirection'];
		$windSpeed = $_POST['windSpeed'];
		$totalHunters = $_POST['totalHunters'];
		$groupHunted = $_POST['groupHunted'];
		$drakes = $_POST['drakes'];
		$hens = $_POST['hens'];
		$gaddies = $_POST['gaddies'];
		$teal = $_POST['teal'];
		$widgeon = $_POST['widgeon']; 
		$comments = $_POST['comments'];
		
		$sql2 = "SELECT * FROM hunts_tab WHERE huntDate = '$huntDate' AND groupHunted = '$groupHunted'";
		$result2 = $connect->query($sql2);
		$sqlHunt = "INSERT INTO hunts_tab(firstName, lastName, emailID, huntDate, sectionHunted, waterLevel, temp, weather, windDirection, windSpeed, totalHunters, groupHunted, drakes, hens, gaddies, teal, widgeon, comments)
						VALUES('$firstName', '$lastName', '$emailID', '$huntDate', '$sectionHunted', '$waterLevel', '$temp', '$weather', '$windDirection', '$windSpeed', '$totalHunters', '$groupHunted', '$drakes', '$hens', '$gaddies', '$teal', '$widgeon', '$comments')";
		$resultHunt = $connect->query($sqlHunt);
		if($resultHunt == FALSE){
			echo "error:".$connect->error;
		}
		else{
			while($row2 = $result2->fetch_assoc()){
				$drakes += $row2['drakes'];
				$hens += $row2['hens'];
				$gaddies += $row2['gaddies'];
				$teal += $row2['teal'];
				$widgeon += $row2['widgeon'];
				$comments = $comments . " | " . $row2['comments'];
			}
			
			$sqlExists = "SELECT * FROM total_tab WHERE huntDate = '$huntDate' AND groupHunted = '$groupHunted'";
			$resultExists = $connect->query($sqlExists);
			if($resultExists->num_rows > 0){
				$sql3 = "UPDATE total_tab
					SET drakes = '$drakes', hens = '$hens', gaddies = '$gaddies', teal = '$teal', widgeon = '$widgeon', comments = '$comments'
					WHERE huntDate = '$huntDate' AND sectionHunted = '$sectionHunted';";
			}
			else{
				$sql3 = "INSERT INTO total_tab (huntDate, sectionHunted, waterLevel, temp, weather, windDirection, windSpeed, totalHunters, groupHunted, drakes, hens, gaddies, teal, widgeon, comments)
					VALUES ('$huntDate', '$sectionHunted', '$waterLevel', '$temp', '$weather', '$windDirection', '$windSpeed', '$totalHunters', '$groupHunted', '$drakes', '$hens', '$gaddies', '$teal', '$widgeon', '$comments')";
			}
			$result3 = $connect->query($sql3);
			if($result3 == FALSE){
				echo "error:".$connect->error;
			}
			else{
				?>
				<script>
					alert("Logs updated!");
					window.location.href = "userHome.php";
				</script>
				<?php
			}
		}
		
	?>
</center>
</body>
</html>