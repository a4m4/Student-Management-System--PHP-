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

			

			<div class="dashbody" align="center">
				<table>
					<tr>
						<td>1</td><td><a href="addstudent.php">Add New Student</a></td>
					</tr>

					<tr>
						<td>2</td><td><a href="updatestudent.php">Update Students</a></td>
					</tr>

					<tr>
						<td>3</td><td><a href="deletestudent.php">Delete Student</a></td>
					</tr>
				</table>				
			</div>


 </body>
 </html>