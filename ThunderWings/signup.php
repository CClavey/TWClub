<html>
<head>
	<link rel="stylesheet" href="CSS/loginStyles.css">
	<script src="JS/loginScripts.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<title> ThunderWings-Signup </title>
	
</head>

<body>
	<center>
	<div class = "boxSignup" ng-app="myApp" ng-controller="myCtrl">
	<div class = "transparent-box">
	<form name="signup-form" method="POST" action="signupProcess.php" >
		<table>
		<tr>
			<td> Signup </td>
		</tr>
		<tr>
			<td><input type = "text" name = "firstName" id = "firstName" placeholder = "First Name"/></td>
		</tr>
		<tr>
			<td><input type = "text" name = "lastName" id = "lastName" placeholder = "Last Name"/></td>
		</tr>
		<tr>
			<td><select id = "gender" name = "gender" value = "gender">
					<option value = "Male">Male</option>
					<option value = "Female">Female</option>
				</select></td>
		</tr>
		<tr>
			<td><input type="date" name="dob" id="dob" value = "dob"/></td>
		</tr>
		<tr>
			<td><label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></td>
		</tr>
		<tr>
			<td><input type="password" ng-model="pwd" ng-change="checkPwd()" name="pwd" id="pwd" placeholder = "Password"/></td>
		</tr>
		<tr>
			<td><input type="password" ng-model="confirm" ng-change="checkPwd()" name="confirm" id="confirm" placeholder = "Confirm Password"/><br/> {{match}} </td>
		</tr>
		<tr>
			<td><input type="submit" name = "signup" id = "signup" value = "Create Account"></td>
		</tr>
		<tr>
			<td>
			<div class="register">
				Already have an account? <a href="index.php">Login!</a>
			</div>
			</td>
		</tr>
		</table>
	</form>
	</div>
	</div>
	</center>
	
	<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
		  $scope.pwd = "";
		  $scope.confirm = "";
		  $scope.match = "";
		  $scope.checkPwd = function() {
			  if(angular.equals($scope.pwd, $scope.confirm)){
				  $scope.match = "";
				  document.getElementById("signup").disabled = false;
			  } else {
				  $scope.match = "Passwords do not match!";
				  document.getElementById("signup").disabled = true;
			  }
		  }
		});
	</script>
</body>
</html>