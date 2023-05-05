<?php include "include/dbc.php";
$student_id = $_REQUEST['id']; ?>

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
				<li><a href="viewlist.php"><span><span>View</span></span></a></li>
				<li><a href="verify.php"><span><span>Verify</span></span> </a></li>
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
	<?php
	$get_student_details = mysql_query("SELECT *FROM stuloan where sid='$student_id'");
				
	$fetch_student=mysql_fetch_array($get_student_details);
			?>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="separate">
				   <div class="status">
				<form name="form1" method="post" action="#">
					<center><h3>Individual Student Details</h3></center>
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
		<td> <?php echo $fetch_student['email']; ?> </td>
	</tr>
						
	<tr>
		<td>Course Duration</td>
		<td> <?php echo $fetch_student['email']; ?> </td>
	</tr>
						
					    
	<tr>
		<td>Fees amount</td>
		<td> <?php echo $fetch_student['email']; ?> </td>
	</tr>
						
	
		
</table>
</form>
            
			<div id="bank"><p><a href="banklogin.php"> Details sent to Students</a></p></div>
			
				<?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
							
				$qry=mysql_query("insert into stuloan(sname,fname,email,contact,uname,dob,age,foc,fsal,suname,mark,course,duration,fees)
				values('$sname','$fname','$email','$contact','$uname','$dob','$age','$foc','$fsal','$suname','$mark','$course','$duration','$fees')");
				  if($qry)
							{
								echo "<script>alert('Added Successfully');</script>";
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
</div>
<!-- / content -->

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>