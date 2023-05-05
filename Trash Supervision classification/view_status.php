
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
.btn {

    font-size: 18px;
    font-weight: 700;
    color: #fff;
	align:center;
	padding:5px;
	border-radius:5px;

}
.btn-danger
{
	background:#C9302C;
}
.btn-success
{
	background:#449D44;
}
</style>

</head>
<body id="page5">
<div class="main">
<!-- header -->
	<header>
		<div class="wrapper">
			<h1 class="head">Trash Supervision</h1>
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
				<li ><a href="register.php"><span><span>Complaint</span></span></a></li>
				<li id="menu_active"><a href="view_status.php"><span><span>View Status</span></span></a></li>
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
	<div id="content">
		<div class="wrapper">
			<div class="pad">
				<div class="wrapper"></div>
			</div>
			<div class="box pad_bot1 bot">
				<div class="pad marg_top">
				<div id="details">
				  	 
				<form name="form1" method="post" action="#">
					<center><h3>Complaint Details</h3>	</center>
					
					
					<table id="detail" align="center" cellspacing="0" cellpadding="5" width="1000">

		<tr>
			 <td><input type="text" name="sname" /></td>
			<td><input type="submit" name="s1" value="search"/></td>
		</tr>	
					</table>
					</form>
					
					
				
					<?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
							
						$qry=mysql_query("select * from complaint_register ");
						
					}
					else
				{
			$qry=mysql_query("select * from complaint_register");
				}
						$no=mysql_num_rows($qry);
							if($no>0)
							{
						 ?>
						 
						 
  <table align="center" cellpadding="10" cellspacing="0">
							
	<tr>
			<th>S.No</th>
			<th>Location</th>
		    <th>Problem</th>					
		    <th>Complaint Date</th>					
			<th>Status</th>
  </tr>
	<?php
	          $i=1;
			  while($row=mysql_fetch_array($qry))
		      {
			  ?>
			<tr>
			  <td><?php echo $i; ?></td>
			  <td><?php echo $row['location']; ?></td>
			  <td><?php echo $row['problem']; ?></td>
			  <td><?php echo $row['cdate']; ?></td>
			  <td><?php if($row['status']==0)
			  {?>
				  <button type="button" class="btn btn-danger">Pending</button>
				  <?php
			  }
			  else{
				  ?>
				   <button type="button" class="btn btn-success">Completed</button>
				  <?php
			  } ?>
				  </td>
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
