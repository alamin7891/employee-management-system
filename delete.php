<?php 
	
	$id = $_GET['stdid'];

	include('include/db_config.php');

	$sql = "DELETE FROM empinfo WHERE id='$id'";

	$conn->query($sql);
	if($conn->affected_rows>0){
		header("Location: employee.php");
	}


 ?>