<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body>

<h4 align="right" style="margin-right: 20px;"><a href="login.php">Admin Login</a></h4>
<h1 align="center">Welcome to Student Management System</h1>

<div align="center">
	
<form method="post" action="index.php">
	<table>
		<tr>
			<td colspan="2">Student Information</td>
		</tr>


		<tr>
			<td>
				Choose Standerd
			</td>

			<td>
				<select name="std">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				Enter Roll No
			</td>

			<td>
				<input type="text" name="rollno" required>
			</td>
		</tr>


		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="Show Information">
			</td>
		</tr>
	</table>
	
</form>


</div>


</body>
</html>


<?php 

	if (isset($_POST['submit'])) {
		
		$standerd = $_POST['std'];
		$rollno = $_POST['rollno'];

		include ('dbcon.php');
		include ('functions.php');


		showdetails($standerd,$rollno);
	}

 ?>