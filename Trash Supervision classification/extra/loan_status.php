<!DOCTYPE html>
<html lang="en">
<head>
<title>Education Loan Management</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<?php include "include/dbc.php"; 
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
				<li><a href="profile.php"><span><span>Profile</span></span></a></li>
				<li><a href="loanapply.php"><span><span>Apply Loan</span></span> </a></li>
				<li id="menu_active"><a href="loan_status.php"><span><span>Loan Status</span></span></a></li>
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
			<div class="pad">
				<div class="wrapper"></div>
			</div>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="details">
				  
				
					<?php
					
				$qry=mysql_query("select * from stuloan where stud_id='$id'");
				
						$no=mysql_num_rows($qry);
							if($no>0)
							{
						 ?>
						 
						 
  <table align="center" cellpadding="10" cellspacing="0">
							
	<tr>
			<th>S.No</th>
			<th>Student Name</th>
		    <th>School/Univeristy Name</th>					
			<th>Course</th>
			<th>Fees</th>
			<th>Decision</th>
  </tr>
	<?php
	          $i=1;
			  while($row=mysql_fetch_array($qry))
		      {
			  ?>
			<tr>
			  <td><?php echo $i; ?></td>
			  <td><?php echo $row['sname']; ?></td>
			  <td><?php echo $row['suname']; ?></td>
			  <td><?php echo $row['course']; ?></td>
			  <td><?php echo $row['fees']; ?></td>
			<td><?php if($row['status']=='0')
				{
					echo "<span style='color:red;'>Pending</span>";
				}
				else if($row['status']=='1')
				{
					echo "<span style='color:red;'>Admin Approved</span>";
				}
				else
				{
					echo "<span style='color:red;'>Request Approved</span>";
				}
			 ?></td>
							</tr>
							<?php
								$i++;
								}
							?>
						</table>
				<?php
						}
						else
						{
							echo "<br/><br/><center><h2>Sorry No Records Found</h2></center>";
						}
					
					?>
				
					<br/>
					<br/>
					<br/>
					
			</div>
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