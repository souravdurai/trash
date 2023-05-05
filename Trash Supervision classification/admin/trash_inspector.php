<?php ob_start();
	include "include/db_connect.php";
	include "include/session_connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision | Admin</title>
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
        Trash Inspector
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="trash_inspector.php">Trash Inspector</a></li>
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
				<?php
				
				$atm=mysql_query("select * from trash order by tid ASC");
				$tot_count = mysql_num_rows($atm);
					if($tot_count>0){
						
				?>
				<div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Trash Id</th>
                        <th>City</th>
                        <th>Photo</th>
                        <th>Level</th>
                        <th>Incharge</th>
                        <th>Status</th>
                      </tr>
                    </thead>
					<tbody>
					<?php
						
						$i=1;
						while($row=mysql_fetch_array($atm))
						{
						$level=$row['level'];
						$trash_level=$level*0.01;
						$trash_id=$row['trash_id'];
					?>
                    
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['trash_id'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td><img src="move/trash/<?php echo $row['photo'];?>" alt="" height="75" width="75"></td>
                       <?php
							 if($trash_level>80)
							 {
								 $update=mysql_query("update trash set status=1 where trash_id='$trash_id");
								 ?>
								 <td  align="center" style="color:red"> <?php echo $trash_level;?></td>
							<?php
							}
							else
							{
							?>
							<td  align="center"> <?php echo $trash_level;?></td>
							<?php
							}
							?>
						<td><?php echo $row['incharge'];?></td>
						<?php
							 if($trash_level>80)
							 {
								// $update=mysql_query("update trash set status=1 where trash_id='$trash_id");
								 ?>
								 <td  align="center" style="color:red"> <a class="btn btn-danger" href="send_alert.php?trash_id=<?php echo $trash_id; ?>&&type=t">Send Alert</a></td>
							<?php
							}
							else
							{
							?>
							<td  align="center"> <a class="btn btn-success" href="#">Not Filled</a></td>
							<?php
							}
							?>
						
                      </tr>
                    <?php
					$i++;
						}
					?>
					</tbody>
                  </table>
				</div>
				<?php
					}
					else
					{
						echo "<center><h4>No Records Found..</h4></center><br/><br/>";
					}
				?>
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