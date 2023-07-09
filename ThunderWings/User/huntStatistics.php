<!DOCTYPE html>
<!-- FIGURE OUT HOW TOTAL KILLS AND SEASON/YEAR STATS WORK -->
<html>
<head>
	<link rel="stylesheet" href="userCSS/userStyles.css">
	<script src="userJS/userScripts.js"></script>
	<title> ThunderWings-Hunt Statistics </title>
	<?php include("userHeader.php");?>
</head>
<body>
	<div class="container">
		<h1>Hunt Statistics</h1>
		<table>
		<?php 
			$sql = "SELECT * FROM total_tab";
			$result = $connect->query($sql);
			while($row1 = $result->fetch_assoc()){
				?>
				<tr>
					<td>Hunt Date: <?php echo $row1['huntDate']; ?></td>
					<td>Section Hunted: <?php echo $row1['huntDate']; ?></td>
					<td>Water Level: <?php echo $row1['huntDate']; ?></td>
					<td>Temperature: <?php echo $row1['huntDate']; ?></td>
					<td>Weather: <?php echo $row1['huntDate']; ?></td>
					<td>Wind Direction: <?php echo $row1['huntDate']; ?></td>
					<td>Wind Speed: <?php echo $row1['huntDate']; ?></td>
					<td>Total Hunters: <?php echo $row1['huntDate']; ?></td>
					<td>Hunting Group: <?php echo $row1['huntDate']; ?></td>
					<td>Drakes Killed: <?php echo $row1['huntDate']; ?></td>
					<td>Hens Killed: <?php echo $row1['huntDate']; ?></td>
					<td>Gaddies Killed: <?php echo $row1['huntDate']; ?></td>
					<td>Teal Killed: <?php echo $row1['huntDate']; ?></td>
					<td>Widgeon Killed: <?php echo $row1['huntDate']; ?></td>
					<td>Comments: <?php echo $row1['huntDate']; ?></td>
				</tr>
				<?php
			}
		?>
		</table>
	</div>
</body>
</html>