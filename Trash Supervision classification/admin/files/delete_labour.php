<?php ob_start();
	include "../include/db_connect.php";
	include "../include/session_connect.php";
	$emp_id=$_REQUEST['emp_id'];
	
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision | Employee</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
       <?php include "nav_top.php";
			include "nav_left.php";
			nav("staff");
		?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Delete Employee Records
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="../add_labour.php">Add Employee</a></li>
            <li><a href="../labour.php">Employee</a></li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
				<div class="modal-content col-lg-offset-3 col-lg-6 mtop30">
					
					<div class="modal-body  gray-color">
					   <form name="editForm" id="edit-form" method="post" action="">
							<center><h3 class="modal-title">
							Do you want to Delete this Record...
							</h3> 
							<div class="modal-footer mtop20">
								<input type="submit" name="s1" value="Yes" class="btn btn-primary mtop10 mleft120 mright10 col-md-3"> 
								
								<input type="button" name="s3" value="No" onclick="window.location.href='../labour.php'" class="btn btn-danger btn-add mtop10 mleft20 mright10 col-md-3"> 
							</div>
									
					   
					<?php
					   if(isset($_POST['s1']))
								{
									extract($_POST);
									
									$delete=mysql_query("delete from staff where emp_id='$emp_id'");
									
									if($delete)
									{
										echo "<script>location.href = '../labour.php';</script>";
									}
									else
									{
										echo "<script>alert('TRY AGAIN');</script>";
									}
								
								}
						?>
					</form>
				</div>	
			</div>
		   </div>   <!-- /.row -->
        </section><!-- /.content -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
        <strong>Copyright &copy; 2019 .</strong> All rights reserved.
      </footer>
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
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