<?php ob_start();
	include "include/db_connect.php";
	include "include/session_connect.php";
	$trash_id=$_REQUEST['trash_id'];
	$type=$_REQUEST['type'];
	if($type=='t')
	{
	$qry=mysql_query("update staff set status=1 where trash_id='$trash_id'");
	if($qry)
	{
		echo "<script>alert('Alert Send Successfully')
									window.location='trash_inspector.php'</script>";
	}
	}
	else
	{
		$qry=mysql_query("update complaint_register set status=1 where trash_id='$trash_id'");
	if($qry)
	{
		echo "<script>alert('Alert Send Successfully')
									window.location='complaint.php'</script>";
	}
	}
?>