<?php ob_start();
	include "include/db_connect.php";
	include "include/session_connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision | Employee</title>
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
			nav("staff");
		?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Employee Details
            <small><a class="btn btn-warning" href="add_labour.php">Add Employee</a></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="add_labour.php">Add Employee</a></li>
            <li><a href="labour.php">Employee</a></li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                
				<?php
				
				$staff=mysql_query("select * from staff order by name ASC");
				$tot_count = mysql_num_rows($staff);
					if($tot_count>0){
				?>
				<div class="box-body table-responsive">
                  <table id="example1" class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Address</th>
                        <th>Trash Id</th>
                        <th>Decision</th>
                      </tr>
                    </thead>
					<tbody>
					<?php
						
						$i=1;
						while($row=mysql_fetch_array($staff))
						{
					?>
                    
                      <tr>
                        <td><?php echo ucwords($row['name']);?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['trash_id'];?></td>
						<td>
							<a href="files/edit_labour.php?emp_id=<?php echo $row['emp_id']; ?>"><i class="fa fa-edit fa-size text-green"></i></a>
							<a href="files/delete_labour.php?emp_id=<?php echo $row['emp_id']; ?>"><i class="fa fa-trash-o fa-size text-red"></i></a>
						</td>
                      </tr>
                    <?php
						}
					?>
					</tbody>
                  </table>
				</div><!-- /.box-body -->
				<?php
					}
					else
					{
						echo "<center><h4>No Records Found..</h4></center><br/><br/>";
					}
				?>
                
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