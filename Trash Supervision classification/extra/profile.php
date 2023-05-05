<!DOCTYPE html>
<html lang="en">
<head>
<title>Education Loan Management</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<?php 
	include "include/dbc.php"; 
	include "include/session.php"; 
?>

<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_700.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<style>
	#menu li span span,#menu .alpha span span 
{background:url(../images/menu_right.gif) top right no-repeat;
padding:0 50px !important;border-left:1px solid #efefef !important;
}
</style>
</head>
<body id="page5">
<div class="main">
<!-- header -->
	<header>
		<div class="wrapper">
			<h1 class="head">Education Loan</h1>
			<form id="search" action="" method="post">
				<div class="bg">
					<input type="submit" class="submit" value="">
					<input type="text" class="input">
				</div>
			</form>
		</div>
		<nav>
			<ul id="menu">
				<li id="menu_active"><a href="profile.php"><span><span>Profile</span></span></a></li>
				<li><a href="loanapply.php"><span><span>Apply Loan</span></span> </a></li>
				<li><a href="loan_status.php"><span><span>Loan Status</span></span></a></li>
				<li><a href="loan_detail.php"><span><span> Loan Details</span></span></a></li>
				<li><a href="logout.php"><span><span>Logout </span></span></a></li>
			</ul>
		</nav>
		<div class="wrapper">
			<div class="text">
				<span class="text1">Effective<span>business solutions</span></span>
				<a href="#" class="button">read more</a>
			</div>
		</div>
	</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
<!-- content -->
	<div id="content">
		<div class="wrapper">
			<div class="pad"> <br/>
				<center><h2>Welcome </h2>
				<?php
					session_start();
					$id=$_SESSION['id'];
					$qry=mysql_query("select * from register where uid='$id'");
					$row=mysql_fetch_array($qry);
				?>
				<div id="separate">
					<table align="center" cellspacing="0" cellpadding="10">

						<tr>
							<td> Student name</td>
							<td> <?php echo ucwords($row['sname']); ?></td>
						</tr>
						
						<tr>
							<td> Email-id</td>
							<td> <?php echo $row['email']; ?> </td>
						</tr>
						
						<tr>
							<td> Contact</td>
							<td> <?php echo $row['contact']; ?> </td>
						</tr>
						
					</table></center>
				</div>
			</div>
			
		</div>
	</div>
<!-- / content -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>