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
				<li id="menu_active"><a href="loanapply.php"><span><span>Apply Loan</span></span> </a></li>
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
<?php
					session_start();
					$id=$_SESSION['id'];
					$qry=mysql_query("select * from register where uid='$id'");
					$row=mysql_fetch_array($qry);
				?>
	<div id="content">
		<div class="wrapper">
			<div class="pad">
				<div class="wrapper"></div>
			</div>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="separate">
				<form name="form1" method="post" action="#" enctype="multipart/form-data">
					<center><h2>Apply Loan</h2></center>
			<table align="left" cellspacing="0" cellpadding="10">

				<tr>
					<td>Name</td>
					<td> <input type="text" name="sname" value="<?php echo $row['sname']; ?>" required /></td>
				</tr>
						
						
				<tr>
				<td>Father Name</td>
				<td> <input type="text" name="fname" required /></td>
				</tr>
						
				<tr>
					<td> Email-id</td>
					<td> <input type="email" name="email" value="<?php echo $row['email']; ?>" required /></td>
				</tr>
						
				<tr>
				  <td> Contact</td>
			<td><input type="text" name="contact" value="<?php echo $row['contact']; ?>" required /></td>
				</tr>
						
						<tr>
							<td> User Name</td>
							<td> <input type="text" name="uname" value="<?php echo $row['uname']; ?>" required /></td>
						</tr>
						
						<tr>
							<td> DOB</td>
							<td> <input type="date" name="dob" required /></td>
						</tr>
						
						
						<tr>
							<td> Age</td>
							<td> <input type="text" name="age" required /></td>
						</tr>
					
       					<tr>
                          <td></td>						
			             <td><h3>Other Information</h3></td>
			            </tr>
					
						<tr>
							<td> Father Occupation</td>
							<td> <input type="text" name="foc" required /></td>
						</tr>
						
						<tr>
							<td> Father Salary</td>
							<td> <input type="text" name="fsal" required /></td>
						</tr>
			
					</table>
					 
					
						<table align="right" cellspacing="0" cellpadding="10">

						<tr>
							<td> School/University Name</td>
							<td> <input type="text" name="suname" required /></td>
						</tr>
						
						<tr>
							<td>Mark Obtained in %</td>
							<td> <input type="text" name="mark" required /></td>
						</tr>
						
						<tr>
							<td> Applied Course Name</td>
							<td> <input type="text" 
							name="course"required /></td>
						</tr>
						
						<tr>
							<td>Course Duration</td>
							<td> <input type="text" name="duration" required /></td>
						</tr>

						<tr>
							<td>Fees amount</td>
							<td> <input type="text" name="fees" required /></td>
						</tr>
						<tr>
							<td>Income Certificate</td>
							<td> <input type="file" name="income_cert" required /></td>
						</tr>
						<tr>
							<td>Upload Mark Sheet</td>
							<td> <input type="file" name="mark_sheet" required /></td>
						</tr>
						<tr>
							<td>Upload Fees Structure</td>
							<td> <input type="file" name="fees_struct" required /></td>
						</tr>
						<tr>
							<td><input type="submit" name="s1" value="Send"/> </td>
					<td> <input type="reset" name="s2" value="clear"/></td>
						</tr>
						
						
					</table>

					</form>
					
				<?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
						$status=0;
						$income_cert=$_FILES['income_cert']['name'];
						$mark_sheet=$_FILES['mark_sheet']['name'];
						$fees_struct=$_FILES['fees_struct']['name'];
			
						$move=move_uploaded_file($_FILES['income_cert']['tmp_name'],"move/".$income_cert);
						$move1=move_uploaded_file($_FILES['mark_sheet']['tmp_name'],"move/".$mark_sheet);
						$move2=move_uploaded_file($_FILES['fees_struct']['tmp_name'],"move/".$fees_struct);
						
						if($move AND $move1 AND $move2)
						{
						$qry=mysql_query("insert into stuloan(stud_id,sname,fname,email,contact,uname,dob,age,foc,fsal,suname,mark,course,duration,fees,income_cert,mark_sheet,fees_struct,status)
						values('$id','$sname','$fname','$email','$contact','$uname','$dob','$age','$foc','$fsal','$suname','$mark','$course','$duration','$fees','$income_cert','$mark_sheet','$fees_struct','$status')");
						  if($qry)
							{
								echo "<script>alert('Added Successfully');</script>";
							}
							else
							{
								echo "<script>alert('Sorry Add Again');</script>";
							}
						}
						else
						{
							echo "<script>alert('File Not Moved');</script>";
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