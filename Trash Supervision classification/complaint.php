<?php include "include/dbc.php"; ?>
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
				<li id="menu_active" ><a href="index.php"><span><span>Home</span></span></a></li>
				<li><a href="all_trash.php"><span><span>Trash</span></span></a></li>
				<li><a href="emp_login.php"><span><span>Employee</span></span></a></li>
				<li class="omega"><a href="admin/index.php"><span><span>Admin </span></span></a></li>
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
<?php
$trash_id=$_REQUEST['trash_id'];
?>
	<section id="content">
		<div class="wrapper">
			<div class="pad">
				<div class="wrapper">
					<article class="col1"><h2>Complaint Register </h2></article>
					
				</div>
			</div>
			<div class="box pad_bot4">
				<div class="pad marg_top">
					<div id="separate">
				<form name="form1" method="post" action="#">
					<center>
					<table align="center" cellspacing="0" cellpadding="20">

						<tr>
							<td> Trash Id</td>
							<td> <input type="text" 
							name="trash_id" value="<?php echo $trash_id; ?>" readonly required /></td>
						</tr><tr>
							<td> Contact No</td>
							<td> <input type="text" 
							name="phone" maxlength="10" required /></td>
						</tr>
						<tr>
							<td> Email-id</td>
							<td> <input type="email" name="email" required /></td>
						</tr>
						
						
						
						<tr>
							<td> Location</td>
							<td> <textarea name="location" rows="5" cols="23"></textarea></td>
						</tr>
						<tr>
							<td> Problem</td>
							<td> <textarea name="problem" rows="5" cols="23"></textarea></td>
						</tr>
						
						
						
					
						<tr>
							<td> </td>
							<td> <input type="submit" name="s1" value="Register"/></td>
						</tr>
						
						
					</table></center>
					</form>
				<?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
							$date=date("Y/m/d");
						$qry=mysql_query("INSERT INTO `complaint_register` (`trash_id` ,`phone` ,`email` ,`location` ,`problem` ,`cdate`)
VALUES ('$trash_id', '$phone', '$email', '$location', '$problem', '$date')");
						  if($qry)
							{
								echo "<script>alert('Complaint Registered Successfully');</script>";
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