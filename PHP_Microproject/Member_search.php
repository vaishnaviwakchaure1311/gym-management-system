<?php
	require('db.php');
	$name="";
	if (isset($_POST['name']))
	{
		echo "<div class='container'>";
		//echo "<a class= 'collapsed nav-link text-light'>";
		echo "<table class='table table-bordered table-hover mt-3'>";
		echo "<tr>";
		echo "<th>Mem_Id</th>";
		echo "<th>Name</th>";
		echo "<th>DOB</th>";
		echo "<th>Age</th>";
		echo "<th>Package</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Update</th>";
		echo "<th>Delete</th>";
		echo "</tr>";
		echo "</div>";
		$name=$_POST['name'];
		$que=mysqli_query($conn,"SELECT * FROM member WHERE `name` = '$name'");
		if(mysqli_num_rows($que)> 0)
		{
			while($row=mysqli_fetch_array($que))
			{
				$id = $row['mem_id'];
				echo "<tr>";
				echo "<td>".$row['mem_id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['dob']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['package']."</td>";
				echo "<td>".$row['mobileno']."</td>";
				echo "<td><a href='home.php?id=$id&info=update_member'><i class='fas fa-pencil-alt'></i></a></td>";
				echo "<td><a href='home.php?id=$id&info=delete_member'><i class='fas fa-trash-alt'></i></a></td>";
			}
		}
		else
		{
			echo "<div class='alert alert-warning'><b>0 result</b></div>";
		}
	} 
?>
