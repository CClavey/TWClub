<html>
<head>
	<?php session_start() ?>
	<link rel="stylesheet" href="userCSS/userStyles.css">
	<script src="userJS/userScripts.js"></script>
	<center>
	<body>
	<ul style="background-color:#c3b091;">
		<p><li class="logo-bar"><a href="userHome.php" class = "drp"><img src = "userImages/templogo.png"  height = "50px" width = "100px"></a>
		</li><p>
		
		<li class="menu-item"><a href="huntLog.php" class="drp">Log Hunts</a>
		</li>
		
		<li class="menu-item"><a href="huntStatistics.php" class="drp">Hunt Statistics</a>
		</li>
		
		<li class="menu-item"><a href="blindConfirmations.php" class="drp">Blind Confirmations</a>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Account</a>
			<div class="menu-content">
				<a href="#">Settings</a><br>
				<a href='../index.php' class='drp'>Logout<img src = 'userImages/logout.png' height = '20px' width = '20px'></a>
			</div>
		</li>
	</ul>
	</center>
</head>
</html>

<!-- <a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $total ?>)" class=linktext><div class = "box"><button style="background-color: #ff6347;" name = "add" id = "add" >Add Item</button></div></a>
					<div id="popup<?php echo $total?>" class="white_content">
					<p align=center><br><br>
					<img src="<?php echo $image_Path2;?>" height = "200px" width="200px" /><br><?php echo $row2['extraName']; ?><br><br><?php echo "$" . $row2['extraPrice']; ?><br><br><button style="background-color: #ff6347;" type="button" onclick = "addToCartStatic('<?php echo $row2['extraName'] . ":" . $row2['extraPrice']; ?>'); popupclose(<?php echo $total ?>);">Add to Cart!</button><br><br>
					<a href = "javascript:void(0)" onclick = "popupclose(<?php echo $total ?>)" class=linktext>Close</a>
					</p>
					</div>
					<div id="fade<?php echo $total?>" class="black_content"></div> -->
					