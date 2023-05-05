<!DOCTYPE html>
<html lang="en">
<head>
<title>Trash Supervision | Employee</title>
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
<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
</head>
<body id="page2">
<div class="main">
<!-- header -->
	<header>
		<div class="wrapper">
			<h1 class="head">Trash</h1>
			<form id="search" action="" method="post">
				<div class="bg">
					<input type="submit" class="submit" value="">
					<input type="text" class="input">
				</div>
			</form>
		</div>
		<nav>
			<ul id="menu">
				<li id="menu_active" ><a href="view_employee.php"><span><span>View Trash Level</span></span></a></li>
				<!--<li><a href="update_cash.php"><span><span>Update Cash</span></span></a></li>-->
				<li><a href="index.php"><span><span>Logout</span></span></a></li>
			</ul>
		</nav>
		<div class="wrapper">
		<div class="slider" id="SliderName_3">
					<img src="images/bg_img21.jpg" />
					<img src="images/bg_img2.jpg" />
				</div>
			<!--<div class="text">
				<div class="text1"></div>
			</div>-->
		</div>
	</header>
<!-- / header -->
<!-- content -->
	<section id="content">
		<div class="wrapper">
			<div class="pad">
				<div class="wrapper">
					<article class="col1"><h2>Employee </h2></article>
					
				</div>
			</div>
			<?php
			include "include/dbc.php";
			include "include/emp_session.php";
			
			$staff=mysql_query("select * from staff where sid='$sid'");
				$row=mysql_fetch_array($staff);
				$trash_id=$row['trash_id'];
				$atm=mysql_query("select * from trash where trash_id='$trash_id'");
				$atm_row=mysql_fetch_array($atm);
				$level=$atm_row['level'];
				$trash_level=$level*0.01;
					
			?>
			<div class="box pad_bot4">
				<div class="pad marg_top">
					<div id="separate">
				<form name="form1" method="post" action="#">
					<center><h2>Employee </h2>	
					<table align="center" cellspacing="0" cellpadding="20">
						<tr>
							<td  align="center"> <b>Employee Name : </b></td>
							<td  align="center"> <?php echo $row['name'];?></td>
						</tr>
						<tr>
							<td  align="center"> <b>Trash Id: </b></td>
							<td  align="center"> <?php echo $row['trash_id'];?></td>
						</tr>
						<tr>
							<td  align="center"> <b>Trash Level: </b></td>
							<?php
							 if($trash_level>80)
							 {
								 ?>
								 <td  align="center" style="color:red"> <?php echo $trash_level."%";?></td>
								 <td  align="center" style="color:red" > <a style=" background:red;color:white; padding:15px;" href="clear_trash.php?trash_id=<?php echo $trash_id;?> ">Clear </a></td>
								 
							<?php
							}
							else
							{
							?>
							<td  align="center"> <?php echo $trash_level."%";?></td>
							<?php
							}
							?>
						</tr>
						
						
					
						
						
					</table></center>
					</form>
				<?php
				/* 	if(isset($_POST['s1']))
					{
						extract($_POST);
							
						$qry=mysql_query("select * from staff where name='$name' && mobile='$mobile'");
						 $n=mysql_num_rows($qry);									
						if($n==1)
						{
						
						$row=mysql_fetch_array($qry);
						$sid=$row['sid'];
						
						session_start();
						$_SESSION['sid']=$sid;
						$_SESSION['atm_id']=$atm_id;
						//echo "success";
						header("location:view_employee.php?atm_id=$atm_id");
						}
						else
						{
						echo "Invalid Username and Password";
						}
				
				
				}
					 */
					
					
					
				  ?>
					
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- / content -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">

					demo3Effect1 = {name: 'myEffect31', top: true, move: true, duration: 400};
					demo3Effect2 = {name: 'myEffect32', right: true, move: true, duration: 400};
					demo3Effect3 = {name: 'myEffect33', bottom: true, move: true, duration: 400};
					demo3Effect4 = {name: 'myEffect34', left: true, move: true, duration: 400};
					demo3Effect5 = {name: 'myEffect35', rows: 3, cols: 9, delay: 50, duration: 100, order: 'random', fade: true};
					demo3Effect6 = {name: 'myEffect36', rows: 2, cols: 4, delay: 100, duration: 400, order: 'random', fade: true, chess: true};

					effectsDemo3 = [demo3Effect1,demo3Effect2,demo3Effect3,demo3Effect4,demo3Effect5,demo3Effect6,'blinds'];

					var demoSlider_3 = Sliderman.slider({container: 'SliderName_3', width: 1024, height: 300, effects: effectsDemo3, display: {autoplay: 3000}});
				</script>

</body>
</html>