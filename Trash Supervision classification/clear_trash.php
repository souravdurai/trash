<?php 
include "include/dbc.php";
include "include/emp_session.php";
$trash_id=$_REQUEST['trash_id'];
$update=mysql_query("update trash set level=0 where trash_id='$trash_id'");
if($update)
{
	echo "<script>alert('Trash Cleared Completely')
									window.location='view_employee.php?trash_id=$trash_id'</script>";
									
}
?>