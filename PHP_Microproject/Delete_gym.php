<?php
	require('db.php');
	$inf=$_GET['id'];
 
	$sql_query="DELETE FROM gym WHERE gym_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete)
	{
		
		header("location:home.php?info=manage_gym");
		
	}
	else
	{
		echo "error".mysqli_error($conn);
	}
	
 
?>