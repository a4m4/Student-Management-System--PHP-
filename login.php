
<?php 

	session_start();
	if (isset($_SESSION['uid'])) {
		header('location:admin/admindash.php');
	}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>

<h1 align="center">Admin Login</h1>

<div align="center">
	
	<form action="login.php" method="post">
	
	Username <input type="text" name="uname" required> <br>
	Password <input type="Password" name="pass" required> <br>
	<input type="submit" name="login" value="Login">

	</form>
</div>


</body>
</html>

<?php 

include ('dbcon.php');

if(isset($_POST['login']))
		{
				$username = $_POST['uname'];
				$password = $_POST['pass'];

				$qry = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
				$result = mysqli_query($con,$qry);

				$row = mysqli_num_rows($result);
				


				if($row<1) {

					?>

					<script>
						  alert('Username or Password Not Match!');
						  window.open('login.php','_self');
					</script>
				
					<?php
				}

				  

				else {
					$data = mysqli_fetch_assoc($result);

					$id = $data['id'];
					echo  $id;



					$_SESSION['uid']=$id;
					header('location:admin/admindash.php');

				}
		}

 ?>