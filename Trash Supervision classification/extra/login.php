<!DOCTYPE html>
<html lang="en">
<head>
<title>Education Loan Management</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<?php include "include/dbc.php"; ?>

<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_700.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>

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
				<li><a href="register.php"><span><span>Register</span></span></a></li>
				<li id="menu_active"><a href="login.php"><span><span>Login</span></span></a></li>
				<li class="omega"><a href="admin/index.php"><span><span>Admin </span></span></a></li>
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
				<center><div class="wrapper"><h2>Login</h2></div></center>
			</div>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="separate"><center>
				<form name="form1" method="post" action="#">
					<table align="center" cellspacing="0" cellpadding="10">

						<tr>
							<td> Email </td>
							<td> <input type="text" name="email" /></td>
						</tr>
						
						<tr>
							<td> Password </td>
							<td> <input type="password" name="pwd" /></td>
						</tr>
						
						<tr>
							<td> </td>
							<td> <input type="submit" name="s1" value="Login"/></td>
						</tr>
					</table>
					
					</form>
						
					</div>
				</div>
			</div>
		</div>
		
			<?php
				if(isset($_POST['s1']))
				{
					extract($_POST);
							
					$qry=mysql_query("select * from register where email='$email' and pwd='$pwd'");
					$no=mysql_num_rows($qry);
					$row=mysql_fetch_array($qry);
							
					if($no==1)
					{
						session_start();
						$_SESSION['id']=$row['uid'];
						header("location:profile.php");
					}
					else
						{
							echo "<script>alert('Invalid Username or Password');</script>";
						}
				}
			?>
		
		
		
		
	</div>
<!-- / content -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>