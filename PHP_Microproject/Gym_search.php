<?php
	require('db.php');
	$name="";
	if (isset($_POST['name'])) 
	{
		echo "<div class='container'>";
		// echo "<a class= 'collapsed nav-link text-light'>";
		echo "<table class='table table-bordered table-hover mt-3'>";
		echo "<tr>";
		echo "<th>Gym_Id</th>";
		echo "<th>Gym_Name</th>";
		echo "<th>Address</th>";
		echo "<th>Type</th>";
		echo "<th>Update</th>";
		echo "<th>Delete</th>";
		echo "</tr>";
		echo "</div>";
		$name=$_POST['name'];
		$que=mysqli_query($conn,"SELECT * FROM gym WHERE `gym_name`='$name'")
		or die("Error occured..!!".mysqli_error($conn));
		if(mysqli_num_rows($que) > 0)
		{
			while($row=mysqli_fetch_array($que))
			{
				$id = $row['gym_id'];
				echo "<tr>";
				echo "<td>".$row['gym_id']."</td>";
				echo "<td>".$row['gym_name']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td><a href='home.php?id=$id&info=update_gym'><i class='fas fa-pencil-alt'></i></a></td>";
				echo "<td><a href='home.php?id=$id&info=delete_gym'><i class='fas fa-trash-alt'></i></a></td>";
			}
		}
		else
		{
			echo "<div class='alert alert-warning'><b>0 result</b></div>";
		}
	} 
?>
