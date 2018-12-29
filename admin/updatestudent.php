<?php 

	session_start();

					if(isset($_SESSION['uid'])){
						echo "";
					}

					else {
						header('location: ../login.php');
					}

 ?>


<?php   include ('header.php'); 
		include ('titlehead.php');
?>

	
<table align="center">

<form action="updatestudent.php" method="POST">
	<tr>
		<th> Enter Standerd	</th>
		<td> <input type="number" name="standerd" placeholder="Enter Standerd" required="required"> </td>
	</tr>

	<tr>
		<th> Enter Student Name	</th>
		<td> <input type="text" name="stuname" placeholder="Enter Student Name" required="required"> </td>
	</tr>

	<tr>
		<td colspan="2" align="center"> <input type="submit" name="submit" value="Search"></td>		
	</tr>

		</form>
	</table>


<table align="center" width="80%" border="1px">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Roll No</th>
		<th>Edit</th>
	</tr>	

	<tr>
		
		<?php 

	if(isset($_POST['submit'])) {
		include ('../dbcon.php');
	
		$standerd = $_POST['standerd'];
		$name = $_POST['stuname'];

		$qry = "SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
		$result = mysqli_query($con,$qry);

		if(mysqli_num_rows($result)<1) {
			echo "<tr><td colspan='4' align='center'>No Records Found</td></tr>";
		}

		else {
			$count=0;

			while($data=mysqli_fetch_assoc($result)) {
				$count++;
				?>

				<tr align="center">
					<td><?php echo $count; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno'] ?></td>
					<td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
				</tr>


				<?php 
			}
		}

		}

 		?>		

	</tr>

</table>


