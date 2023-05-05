<?php include "include/dbc.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Trash Supervision | User</title>
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
<style>
ul.atm
{
	list-style:none;
	margin:0;
}
ul.atm li 
{
	height:350px;
	width:350px;
	margin:15px;
	float:left;
	background:#ccc;
	border:2px solid #282828;
}
ul.atm li img
{
border:2px solid black;
margin-bottom:10px;
}
ul.atm li a
{
	text-decoration:none;
	margin:0;
	margin-top:10px;
	color:red;
}
.btn
{
	color: white;
	background-color: #007bff;
	border-color: #007bff;
	padding: .5rem 1rem;
	font-size: 1.25rem;
	line-height: 1.5;
	border-radius: .3rem;
	text-decoration:none;
	display: block;
text-align:center;
width: 80%;
}
</style>


</head>
<body id="page5">
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
				<li><a href="index.php"><span><span>Home</span></span></a></li>
				<li id="menu_active"><a href="all_trash.php"><span><span>Trash</span></span></a></li>
				<li ><a href="emp_login.php"><span><span>Employee</span></span></a></li>
				<li class="omega"><a href="admin/index.php"><span><span>Admin </span></span></a></li>
			</ul>
		</nav>
		<div class="wrapper">
			<div class="slider" id="SliderName_3">
					<img src="images/bg_img21.jpg" />
					<img src="images/bg_img2.jpg" />
				</div>
		</div>
	</header>
<!-- / header -->
<!-- content -->
<?php
				$trash_id=$_REQUEST['trash_id'];
				$atm=mysql_query("select * from trash where trash_id='$trash_id'");
				$row=mysql_fetch_array($atm);
						
				?>
	<div id="content">
		<div class="wrapper">
			<div class="pad">
				<div class="wrapper"></div>
			</div>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="separate">
				<a href="complaint.php?trash_id=<?php echo $trash_id; ?>" class="btn" style="color:white">Complaint Register</a>
				<ul class="atm">
				
				<li>
				<img src="admin/move/trash/<?php echo $row['photo'];?>" height="250" width="350" />
				<center><a href="#" ><?php echo $row['city']; ?></a></center>
				</li>
				<li><form name="form1" method="post" action="#">
					<center><h2>Welcome</h2>	
					<table align="center" cellspacing="0" cellpadding="20">

						<tr>
							<td> Trash</td>
							<td> <input type="text" 
							name="trash"  required /></td>
						</tr>
						
							<tr>
							<td> </td>
							<td> <input type="submit" name="s1" value="Submit"/></td>
						</tr>
						</table></center>
					</form>
				
				</li>
				</ul>
					<?php
				if(isset($_POST['s1']))
				{
				extract($_POST);
				
				$qry=mysql_query("select * from trash where trash_id='$trash_id'");
					$row=mysql_fetch_array($qry);
						$level=$row['level'];
						$trash1=$level+$trash;
						
						/* session_start();
						
						$_SESSION['trash_id']=$trash_id; */
						$update=mysql_query("update trash set level='$trash1' where trash_id='$trash_id'");
						if($update)
						{
						echo "success";
						//header("location:user_details.php?atm_id=$atm_id");
						}
						else
						{
						echo "Invalid Username and Password";
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