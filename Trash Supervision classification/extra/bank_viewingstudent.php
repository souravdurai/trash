<?php ob_start();
	include "include/dbc.php";
	$student_id = $_REQUEST['id']; 
	session_start();
	$bid=$_SESSION['uid'];
	if($_SESSION['uid']=="")
	{
		header("location:banklogin.php");
	}
	$sel=mysql_query("SELECT *FROM bank where bid='$bid'");
				
	$sel_row=mysql_fetch_array($sel);
	$bname=$sel_row['bname'];
	$address=$sel_row['address'];
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
				<li id="menu_active"><a href="stuloandetailsforbank.php"><span><span>Loan Request</span></span></a></li>
				<li><a href="loan_amount.php"><span><span>Loan Amount</span></span></a></li>
				<li class="omega"><a href="logout.php"><span><span>Logout</span></span></a></li>

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
	<?php
	$get_student_details = mysql_query("SELECT *FROM stuloan where sid='$student_id'");
				
	$fetch_student=mysql_fetch_array($get_student_details);
			$stud_id=$fetch_student['stud_id'];
			?>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="separate">
				
				   <div class="status">
				<form name="form1" method="post" action="#">
					<center><h2>Individual Student Details</h2></center>
					<table align="left" cellspacing="0" cellpadding="10">

						<tr>
							<td>Name</td>
			<td> <?php echo $fetch_student['sname']; ?> </td>
						</tr>
						
						
			<tr>
				<td>Father Name</td>
			<td> <?php echo $fetch_student['fname']; ?> </td>
						</tr>
						
		<tr>
			<td> Email-id</td>
		<td> <?php echo $fetch_student['email']; ?> </td>
						</tr>
						
	    <tr>
			<td> Contact</td>
	<td> <?php echo $fetch_student['contact']; ?>  </td>
		</tr>
						
	<tr>
		<td> User Name</td>
	<td> <?php echo $fetch_student['uname']; ?> </td>
	</tr>
						
	<tr>
		<td> DOB</td>
	   <td> <?php echo $fetch_student['dob']; ?> </td>
						</tr>
						
						
		<tr>
			<td> Age</td>
			<td> <?php echo $fetch_student['age']; ?> </td>
	   </tr>
					
       <tr>
            <td></td>						
	<td><h3>Other Information</h3></td>
			            </tr>
					
	<tr>
		<td> Father Occupation</td>
	 <td> <?php echo $fetch_student['foc']; ?> </td>
	</tr>
						
	<tr>
		<td> Father Salary</td>
	   <td> <?php echo $fetch_student['fsal']; ?> </td>
						</tr>
			
	</table>
					 
					
	<table align="right" cellspacing="0" cellpadding="10">

	<tr>
		<td> School/University Name</td>
	<td> <?php echo $fetch_student['suname']; ?> </td>
						</tr>
						
	<tr>
		<td>Mark Obtained in %</td>
		<td> <?php echo $fetch_student['mark']; ?> </td>
	</tr>
						
	<tr>
		<td> Applied Course Name</td>
		<td> <?php echo $fetch_student['course']; ?> </td>
	</tr>
						
	<tr>
		<td>Course Duration</td>
		<td> <?php echo $fetch_student['duration']; ?> </td>
	</tr>
						
					    
	<tr>
		<td>Fees amount</td>
		<td> <?php echo $fetch_student['fees']; ?> </td>
	</tr>
	<tr>
		<td>Income Certificate</td>
		<td> <a style="margin-left:0px!important;" target="_blank" href="../move/<?php echo $fetch_student['income_cert']; ?> "> View / Download </a></td>
	</tr>
	<tr>
		<td>Marksheet</td>
		<td> <a style="margin-left:0px!important;" target="_blank" href="../move/<?php echo $fetch_student['mark_sheet']; ?>"> View / Download </a> </td>
	</tr>	
	<tr>
		<td>Fees Structure</td>
		<td><a style="margin-left:0px!important;" target="_blank" href="../move/<?php echo $fetch_student['fees_struct']; ?>"> View / Download </a></td>
	</tr>
	<tr> </tr>
</table>
<form name="form" method="post">
	<div class="approval">
		Decision<select name="decision" required>
		<option value="Approved">Approved</option>
		<option value="Denied">Denied</option>
		 </select>
		 <br/><br/>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 Sanctioned Amount <input type="text" name="amount" required>
	  <br><br/>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	  <input type="submit" name="d1" value="Submit Here">
		</div>
</form>
 
				<?php
					if(isset($_POST['d1']))
					{
						extract($_POST);
						$cdate=date("d-m-Y");
						if($decision=="Approved")
						{
							$status=2;
							
							$qry=mysql_query("update stuloan set amount='$amount',status='$status' where sid='$student_id'");
							$insert=mysql_query("insert into loan_amount(cdate,stud_id,bname,address,amount)values('$cdate','$stud_id','$bname','$address','$amount')");
						}
						else
						{
							$status=2;
							
							$qry=mysql_query("update stuloan set amount='$amount',status='$status' where sid='$student_id'");
							
							$insert=mysql_query("insert into loan_amount(cdate,stud_id,bname,address,amount)values('$cdate','$stud_id','$bname','$address','0')");
						}
						
						if($qry AND $insert)
							{
								header("location:stuloandetailsforbank.php");
							}
							else
							{
								//echo "<script>alert('Sorry Add Again');</script>";
								echo mysql_error();
							}	
					}  
				  ?>
					
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