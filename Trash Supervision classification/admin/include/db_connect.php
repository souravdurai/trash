<?php
		$connect=mysql_connect("localhost","root","")or die("Couldn't connect db");
		
		$db=mysql_select_db("trash",$connect)or die("db doesn't exist");
?>