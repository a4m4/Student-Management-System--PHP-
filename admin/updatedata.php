<?php 
	

		include ('../dbcon.php');

		$rollno = $_POST['rollno'] ;
		$name = $_POST['name'];
		$city = $_POST['city'];
		$pcon = $_POST['pcon'];
		$std = $_POST['std'];
		$id = $_POST['sid'];
		$qry = " UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon' WHERE `id` = '$id'; ";

		

		$run = mysqli_query($con,$qry);
		
		if( $run == true) { 

				?>

				<script type="text/javascript"> alert("Data Update Successfully");

				window.open('admindash.php','_self');

				</script>

				<?php 

		}


 ?>