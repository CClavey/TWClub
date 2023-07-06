<?php
	$connect = new mysqli("localHost", "root", "", "tw_db");
	
	if($connect->connect_errno) {
		die('Could not connect: ' . $connect->connect_errno);
	}
?>