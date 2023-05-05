<?php ob_start();
	include "include/db_connect.php";
	include "include/session_connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision| Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/style.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
 <script src="graph/Chart.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
   ul.gr
   {
	   list-style:none;
	   width:200px;
   }
   ul.gr li
   {
	   
	   float:left;
	   margin-left:20px;
	   margin-top:20px;
   }
   ul.gr li div
   {
	   width:30px;
	   height:20px;
	   background:gray;
	   
	   float:left;
   }
   ul.gr li label
   {
	   float:left;
	   margin-left:30px;
	   margin-top:0px;
   }
   
   </style>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
       <?php include "include/nav_top.php";
			include "include/nav_left.php";
			nav("customer");
		?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
         View Trash Pick Alert
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="pick_alert.php">Pick Alert</a></li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
				<div class="row">
				<?php
				$i=1;
				$qry=mysql_query("select * from trash order by tid desc");
				while($row=mysql_fetch_array($qry))
				{
					$id="bar".$i;
					//echo $id;
				?>
				<div class="col-sm-4">
				<center>
					  <canvas id="<?php echo $id;?>" height="300" width="400" style="width: 200px; height: 300px;"></canvas>
							<?php
				$trash_id=$row['trash_id'];
				$level=$row['level'];
				$trash_level=$level*0.01;
				
							?>
                        <script>
                            var barChartData = {
                            labels : ["Trash"],
                            datasets : [
                                {
									<?php
									if($trash_level>80)
									{?>
										fillColor : "#FF0000",
                                    data : [
									<?php echo $trash_level;?>
									]
									<?php
									}
									else
									{
										?>
									
                                    fillColor : "#FC8213",
                                    data : [
									<?php echo $trash_level;?>
									]
									<?php
									}
									?>
                                }
								
                            ]

                        };
                            new Chart(document.getElementById("<?php echo $id;?>").getContext("2d")).Bar(barChartData);

                        </script>
						<h1>Trash Id : <?php echo $trash_id; ?> % </h1>
						<h1>Available Trash : <?php echo $trash_level; ?> % </h1>
				</center>
                </div><!-- /.box-body -->
				<?php
				$i++;
				}
				
				?>
                </div><!-- /.box-body -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
        <strong>Copyright &copy; 2019 .</strong> All rights reserved.
      </footer>
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>