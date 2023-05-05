<?php ob_start();
	session_start();
	$admin_id=$_SESSION['admin_id'];
	if($_SESSION['admin_id']=="")
	{
		header("location:index.php");
	}
?>