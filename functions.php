<?php 
	

	function showdetails($standerd,$rollno)
		{
			include ('dbcon.php');
		
			$qry = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd'";

			$result = mysqli_query($con,$qry);

			if (mysqli_num_rows($result)>0) {
				
				$data = mysqli_fetch_assoc($result);

				?>

					<table align="center" border="1px">
							<tr>
								<td colspan="2"> Student Details</td>
							</tr>

							<tr>
								<td>Name</td>
								<td> <?php echo $data['name']; ?> </td>
							</tr>


							<tr>
								<td>Standerd</td>
								<td> <?php echo $data['standerd']; ?> </td>
							</tr>


							<tr>
								<td>Roll No</td>
								<td> <?php echo $data['rollno']; ?> </td>
							</tr>

							<tr>
								<td>City</td>
								<td> <?php echo $data['city']; ?> </td>
							</tr>

							<tr>
								<td>Parent Contact</td>
								<td> <?php echo $data['pcont']; ?> </td>
							</tr>

					</table>




				<<?php 

			}

			else {

				echo "<script> alert('No Student Found !'); </script>";
			}

		}

 ?>