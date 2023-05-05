<?php ob_start();
	include "include/db_connect.php";
	include "include/session_connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision | Trash</title>
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
    <link href="plugins/date/datepicker.css" rel="stylesheet" type="text/css" />

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
           Add Trash
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="add_trash.php">Add Trash</a></li>
            <li><a href="trash.php">Trash</a></li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Basic Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="part1">
					  <div class="box-body">
						<!--<div class="form-group">
						  <label for="exampleInputEmail1">Bank Name</label>
						  <input type="text" name="bank_name" class="form-control" id="exampleInputEmail1" placeholder="Enter bank name" autocomplete="off" required />
						</div>-->
						<div class="form-group">
						  <label for="exampleInputEmail1">Trash Id</label>
						  <input type="text" name="trash_id" class="form-control" pattern=".{6}" placeholder="Enter Trash Id" title="Please Enter 6 digits" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">City</label>
						  <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Street</label>
						  <input type="text" name="street" class="form-control" id="exampleInputEmail1" placeholder="Enter Street" autocomplete="off" required />
						</div>
						
						
					  </div><!-- /.box-body -->
					</div>
					<div class="part2">
					  <div class="box-body">
					  <div class="form-group">
						  <label for="exampleInputEmail1">Land Mark</label>
						  <input type="text" name="land_mark" class="form-control" id="exampleInputEmail1" placeholder="Enter Land Mark" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Address</label>
						  <textarea name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address"></textarea>
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Photo</label>
						  <input type="file" name="photo" class="form-control" id="exampleInputEmail1" autocomplete="off" required />
						</div>
					  </div>
					</div>
					<div class="box-footer">
						<button type="submit" name="add" class="btn btn-primary pull-right mtop20">Submit</button>
					</div>
				
				</form>
				<?php
					if(isset($_POST['add']))
					{
						extract($_POST);
						$photo=$_FILES['photo']['name'];
						$move=move_uploaded_file($_FILES['photo']['tmp_name'],"move/trash/".$photo);
						

							
						
							$qry=mysql_query("INSERT INTO `trash` (`trash_id`, `city`, `street`, `land_mark`, `address`, `photo`, `level`) VALUES 
							                ( '$trash_id', '$city', '$street', '$land_mark', '$address', '$photo', '0')");
									
							if($qry)
								{
									echo "<script>alert('SUCCESS');</script>";
									/*echo "<script type='text/javascript'> 
										function () {
											$('#alertModal').modal('show')
										}
									</script>";*/
								}		
								else
								{
							 		echo "<script>alert('Try AGAIN');</script>";
								}
							
					}
				?>
              </div><!-- /.box -->
			</div><!--/.col (left) -->
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
	<!-- Modal -->
  
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="dist/js/jquery-migrate-1.3.0.js"></script>
	<script src="plugins/date/bootstrap-datepicker.js"></script>
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
   
	<script>
		$(function () 
			{
				$("#datepicker").datepicker({
					//changeMonth: true;
					//changeYear: true;
					});
				
			}
		);
	</script>
	<div class="modal fade" id="alertModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Alert Message </h4>
        </div>
        <div class="modal-body">
          <p class="text-center"> 
			Please login to add material(s). <br/>
			<a href="login.php"> CLICK HERE </a> to go to login page.
		  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  </body>
</html>