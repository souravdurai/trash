<?php include "include/dbc.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Education Loan Management</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_700.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_600.font.js"></script>



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
				<li><a href="index.php"><span><span>Home</span></span></a></li>
				<li><a href="about.php"><span><span>About</span></span> </a></li>
				<li id="menu_active"><a href="register.php"><span><span>Register</span></span></a></li>
				<li><a href="login.php"><span><span>Login</span></span></a></li>
				<li class="omega"><a href="contact.php"><span><span>Contact </span></span></a></li>
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
			<div class="pad">
				<div class="wrapper"></div>
			</div>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="separate">
				<form name="form1" method="post" action="#">
					<center><h2>Admin Registration</h2>	</center>
					<table align="center" cellspacing="0" cellpadding="10">

						<tr>
							<td> Admin name</td>
							<td> <input type="text" name="bname" required /></td>
						</tr>
						
								
						<tr>
							<td> Password</td>
							<td> <input type="text" name="pwd" required /></td>
						</tr>
						
					
						<tr>
							<td> </td>
							<td> <input type="submit" name="s1" value="Register"/></td>
						</tr>
						
						
					</table>
					</form>
				<?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
							
	$qry=mysql_query("insert into bankadmin(bname,pwd)values('$bname','$pwd')");
						  if($qry)
							{
								echo "<script>alert('Added Succesfully');</script>";
							}
							else
							{
								echo "<script>alert('Sorry Add Again');</script>";
							}	
					}  
					
					
					
					
				  ?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- / content -->

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>