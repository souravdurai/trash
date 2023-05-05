
<?php include "include/dbc.php"; 
	session_start();
	$bid=$_SESSION['uid'];
	if($_SESSION['uid']=="")
	{
		header("location:banklogin.php");
	}
	$sel1=mysql_query("SELECT *FROM bank where bid='$bid'");
				
	$sel_row1=mysql_fetch_array($sel1);
	$bname=$sel_row1['bname'];
	
?>
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
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_700.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<style>

	#menu li span span,#menu .alpha span span 
{background:url(../images/menu_right.gif) top right no-repeat;
padding:0 100.5px!important;border-left:1px solid #efefef !important;
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
				<li><a href="stuloandetailsforbank.php"><span><span>Loan Request</span></span></a></li>
				<li id="menu_active"><a href="loan_amount.php"><span><span>Loan Amount</span></span></a></li>
				<li class="omega"><a href="logout.php"><span><span>Logout </span></span></a></li>
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
					
				$qry=mysql_query("select * from loan_amount where bname='$bname'");
				
						$no=mysql_num_rows($qry);
							if($no>0)
							{
						 ?>
						 
						 
  <table align="center" cellpadding="10" cellspacing="0">
							
	<tr>
			<th>S.No</th>
			<th>Date</th>
		    <th>Student Name</th>					
			<th>Address</th>
			<th>Amount</th>
  </tr>
	<?php
	          $i=1;
			  while($row=mysql_fetch_array($qry))
		      {
			  $stud_id=$row['stud_id'];
			  $student=mysql_query("select * from register where uid='$stud_id'");
			  $stud_row=mysql_fetch_array($student);
			  ?>
			<tr>
			  <td><?php echo $i; ?></td>
			   <td><?php echo $row['cdate']; ?></td>
			  <td><?php echo ucwords($stud_row['sname']); ?></td>
			  <td><?php echo ucwords($row['address']); ?></td>
			  <td><?php echo $row['amount']; ?></td>
			
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
