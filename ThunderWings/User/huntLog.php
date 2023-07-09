<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="userCSS/userStyles.css">
	<script src="userJS/userScripts.js"></script>
	<title>ThunderWings - Log Hunts</title>
	<?php include("userHeader.php");?>
</head>
<body>
	<div class="container">
		<h1>Log Hunts</h1>
		<form name="log-form" method="POST" action="logHuntProcess.php">
			<div class="form-group">
				<label for="huntDate">Hunt Date:</label>
				<input type="date" name="huntDate" id="huntDate">
			</div>
			<div class="form-group">
				<label for="sectionHunted">Section Hunted:</label>
				<select id="sectionHunted" name="sectionHunted">
					<option value="Big Hole">Big Hole</option>
					<option value="Mallard Hole">Mallard Hole</option>
					<option value="Slough Hole">Slough Hole</option>
					<option value="Floating Blind">Floating Blind</option>
					<option value="Valve Hole">Valve Hole</option>
					<option value="Deer Stand Hole">Deer Stand Hole</option>
					<option value="Field Hole">Field Hole</option>
					<option value="Wet Lands">Wet Lands</option>
					<option value="Waded Timber">Waded Timber</option>
					<option value="S. Fish Pond">S. Fish Pond</option>
					<option value="E. Fish Pond">E. Fish Pond</option>
					<option value="W. Fish Pond">W. Fish Pond</option>
					<option value="Bobber Blind">Bobber Blind</option>
				</select>
			</div>
			<div class="form-group">
				<label for="waterLevel">Water Level:</label>
				<select id="waterLevel" name="waterLevel">
					<option value="Low">Low</option>
					<option value="Normal">Normal</option>
					<option value="OverSpillway">Over Spillway</option>
					<option value="OverLevy">OverLevy</option>
				</select>
			</div>
			<div class="form-group">
				<label for="temp">Temperature:</label>
				<select id="temp" name="temp">
					<option value="55+">55+°F</option>
					<option value="45-55">45-55°F</option>
					<option value="35-44">35-44°F</option>
					<option value="25-34">25-34°F</option>
					<option value="24-">24 or Below°F</option>
				</select>
			</div>
			<div class="form-group">
				<label for="weather">Weather:</label>
				<select id="weather" name="weather">
					<option value="Sunny">Sunny</option>
					<option value="Cloudy">Cloudy</option>
					<option value="Rain">Rain</option>
					<option value="Partly Cloudy">Partly Cloudy</option>
					<option value="Sleet/Snow">Sleet/Snow</option>
				</select>
			</div>
			<div class="form-group">
				<label for="windDirection">Wind Direction:</label>
				<select id="windDirection" name="windDirection">
					<option value="North">North</option>
					<option value="Northeast">Northeast</option>
					<option value="East">East</option>
					<option value="Southeast">Southeast</option>
					<option value="Northwest">Northwest</option>
					<option value="West">West</option>
					<option value="Southwest">Southwest</option>
					<option value="South">South</option>
				</select>
			</div>
			<div class="form-group">
				<label for="windSpeed">Wind Speed:</label>
				<select id="windSpeed" name="windSpeed">
					<option value="0-10">0-10mph</option>
					<option value="10-15">10-15mph</option>
					<option value="15-20">15-20mph</option>
					<option value="20+">20+mph</option>
				</select>
			</div>
			<div class="form-group">
				<label for="totalHunters">Total Hunters:</label>
				<input type="number" id="totalHunters" name="totalHunters" min="0" max = "13" placeholder="Number of hunters">
			</div>
			<div class="form-group">
				<label for="groupHunted">Group Hunted:</label>
				<select id="groupHunted" name="groupHunted">
					<option value="AR">AR</option>
					<option value="GA">GA</option>
					<option value="JB">JB</option>
				</select>
			</div>
			<div class="form-group">
				<label for="drakes">Number of Drakes Killed:</label>
				<input type="number" id="drakes" name="drakes" min="0" placeholder="Number of drakes you killed">
			</div>
			<div class="form-group">
				<label for="hen">Number of Hens Killed:</label>
				<input type="number" id="hens" name="hens" min="0" placeholder="Number of hens you killed">
			</div>
			<div class="form-group">
				<label for="gaddy">Number of Gaddies Killed:</label>
				<input type="number" id="gaddies" name="gaddies" min="0" placeholder="Number of gaddies you killed">
			</div>
			<div class="form-group">
				<label for="teal">Number of Teal Killed:</label>
				<input type="number" id="teal" name="teal" min="0" placeholder="Number of teal you killed">
			</div>
			<div class="form-group">
				<label for="widgeon">Number of Widgeon Killed:</label>
				<input type="number" id="widgeon" name="widgeon" min="0" placeholder="Number of widgeon you killed">
			</div>
			<div class="form-group">
				<label for="comments">User Comments:</label>
				<textarea id="comments" name="comments" placeholder="Enter user comments"></textarea>
			</div>
			<div class="button-wrapper">
				<button type="submit">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>
